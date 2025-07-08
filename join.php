<?php
// Include header
include('../fixed/header.php');
?>

<style>
    /* Form Container Styles */
    .form-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 30px;
        background-color: rgba(255, 253, 248, 0.9);
        border-radius: 15px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 1;
    }

    /* Form Title Styles */
    .form-title {
        color: #1A1A1A;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2rem;
        font-weight: 700;
    }

    /* Form Group Styles */
    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #1A1A1A;
        font-weight: 500;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
    .form-group textarea,
    .form-group input[type="file"] {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: all 0.3s ease;
        background-color: #FFF;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="email"]:focus,
    .form-group input[type="tel"]:focus,
    .form-group textarea:focus {
        border-color: #5DE2E6;
        box-shadow: 0 0 0 3px rgba(93, 226, 230, 0.2);
        outline: none;
    }

    .form-group textarea {
        min-height: 120px;
        resize: vertical;
    }

    /* Required Field Indicator */
    .required-field::after {
        content: " *";
        color: #FF5FA2;
    }

    /* File Input Customization */
    .file-input-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 100%;
    }

    .file-input-button {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 12px 15px;
        background-color: #FFF;
        color: #555;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
        text-align: left;
    }

    .file-input-wrapper input[type="file"] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        cursor: pointer;
    }

    /* Submit Button Styles */
    .submit-btn {
        background-color: #FF5FA2;
        color: white;
        border: none;
        padding: 15px 30px;
        font-size: 18px;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: all 0.3s ease;
        font-weight: 600;
        margin-top: 10px;
    }

    .submit-btn:hover {
        background-color: #e04d8a;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 95, 162, 0.3);
    }

    /* Error Message Styles */
    .error-message {
        color: #FF5FA2;
        font-size: 14px;
        margin-top: 5px;
        display: none;
    }

    /* Success Modal Styles */
    .success-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .success-modal-content {
        background-color: #FFFDF8;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        max-width: 500px;
        width: 90%;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    }

    .success-modal h2 {
        color: #1A1A1A;
        margin-bottom: 20px;
    }

    .success-modal p {
        color: #555;
        margin-bottom: 30px;
    }

    .success-modal-btn {
        background-color: #5DE2E6;
        color: #1A1A1A;
        border: none;
        padding: 12px 25px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .success-modal-btn:hover {
        background-color: #4bc8cc;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
            margin: 20px;
        }

        .form-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"],
        .form-group textarea,
        .form-group input[type="file"] {
            padding: 10px 12px;
            font-size: 14px;
        }

        .submit-btn {
            padding: 12px 20px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .form-container {
            padding: 15px;
            margin: 15px;
        }

        .form-title {
            font-size: 1.3rem;
        }
    }
</style>

<?php
// Check for success parameter
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("successModal").style.display = "flex";
        });
    </script>';
}
?>

<div class="form-container">
    <h1 class="form-title">Rejoignez notre équipe</h1>
    <form id="joinForm" action="process_join.php" method="post" enctype="multipart/form-data" novalidate>
        <div class="form-group">
            <label for="fullname" class="required-field">Nom complet</label>
            <input type="text" id="fullname" name="fullname" required>
            <div class="error-message" id="fullname-error">Veuillez entrer votre nom complet</div>
        </div>

        <div class="form-group">
            <label for="email" class="required-field">E-mail</label>
            <input type="email" id="email" name="email" required>
            <div class="error-message" id="email-error">Veuillez entrer une adresse e-mail valide</div>
        </div>

        <div class="form-group">
            <label for="phone" class="required-field">Votre téléphone</label>
            <input type="tel" id="phone" name="phone" required>
            <div class="error-message" id="phone-error">Veuillez entrer votre numéro de téléphone</div>
        </div>

        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea id="message" name="message"></textarea>
        </div>

        <div class="form-group">
            <label for="cv" class="required-field">CV</label>
            <div class="file-input-wrapper">
                <button type="button" class="file-input-button" id="fileInputLabel">Choisir un fichier</button>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
            <div class="error-message" id="cv-error">Veuillez sélectionner votre CV</div>
            <small id="fileInfo" style="display: none; color: #555; margin-top: 5px;"></small>
        </div>

        <button type="submit" class="submit-btn">Envoyer</button>
    </form>
</div>

<!-- Success Modal -->
<div class="success-modal" id="successModal">
    <div class="success-modal-content">
        <h2>Message envoyé avec succès!</h2>
        <p>Nous avons bien reçu votre candidature et nous vous contacterons bientôt.</p>
        <button class="success-modal-btn" onclick="closeSuccessModal()">Fermer</button>
    </div>
</div>

<script>
    // File input display
    document.getElementById('cv').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : 'Aucun fichier sélectionné';
        document.getElementById('fileInputLabel').textContent = fileName;
        document.getElementById('fileInfo').style.display = 'block';
        document.getElementById('fileInfo').textContent = `Fichier sélectionné: ${fileName}`;
    });

    // Form validation
    document.getElementById('joinForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset error messages
        document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
        
        let isValid = true;
        
        // Validate fullname
        const fullname = document.getElementById('fullname').value.trim();
        if (!fullname) {
            document.getElementById('fullname-error').style.display = 'block';
            isValid = false;
        }
        
        // Validate email
        const email = document.getElementById('email').value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email || !emailRegex.test(email)) {
            document.getElementById('email-error').style.display = 'block';
            isValid = false;
        }
        
        // Validate phone
        const phone = document.getElementById('phone').value.trim();
        if (!phone) {
            document.getElementById('phone-error').style.display = 'block';
            isValid = false;
        }
        
        // Validate CV
        const cv = document.getElementById('cv').files;
        if (cv.length === 0) {
            document.getElementById('cv-error').style.display = 'block';
            isValid = false;
        }
        
        if (isValid) {
            // If using AJAX, you would send the form data here
            // For this example, we'll just show the success modal
            document.getElementById('successModal').style.display = 'flex';
            
            // If you want to actually submit the form to process_join.php:
            // this.submit();
        }
    });

    function closeSuccessModal() {
        document.getElementById('successModal').style.display = 'none';
    }

    // For demonstration, we're not actually submitting to process_join.php
    // In a real implementation, you would create process_join.php to handle the form submission
    // and send the email to aw.studio.dz@gmail.com
</script>

<?php
// Include footer
include('../fixed/footer.php');
?>