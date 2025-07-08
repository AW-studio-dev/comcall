<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define required fields
    $required = ['fullname', 'email', 'subject', 'message'];
    $errors = [];
    
    // Check for empty required fields
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $errors[] = ucfirst($field) . " est obligatoire.";
        }
    }
    
    // Validate email format
    if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format d'email invalide.";
    }
    
    // If no errors, process form
    if (empty($errors)) {
        $to = "aw.studio.dz@gmail.com";
        $subject = "Nouveau message de contact: " . htmlspecialchars($_POST['subject']);
        
        // Build email message
        $message = "
        <html>
        <head>
            <title>Nouveau message de contact</title>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #1A1A1A; }
                .header { color: #FF5FA2; font-size: 18px; font-weight: bold; margin-bottom: 20px; }
                .label { font-weight: bold; color: #555555; }
                .value { margin-bottom: 15px; }
            </style>
        </head>
        <body>
            <div class='header'>Nouveau message de contact</div>
            
            <div class='label'>Nom complet:</div>
            <div class='value'>".htmlspecialchars($_POST['fullname'])."</div>
            
            <div class='label'>Email:</div>
            <div class='value'>".htmlspecialchars($_POST['email'])."</div>
            
            <div class='label'>Téléphone:</div>
            <div class='value'>".htmlspecialchars($_POST['phone'])."</div>
            
            <div class='label'>Société:</div>
            <div class='value'>".htmlspecialchars($_POST['company'])."</div>
            
            <div class='label'>Sujet:</div>
            <div class='value'>".htmlspecialchars($_POST['subject'])."</div>
            
            <div class='label'>Message:</div>
            <div class='value'>".nl2br(htmlspecialchars($_POST['message']))."</div>
        </body>
        </html>
        ";
        
        // Set headers for HTML email
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: ".htmlspecialchars($_POST['email'])."\r\n";
        $headers .= "Reply-To: ".htmlspecialchars($_POST['email'])."\r\n";
        
        // Send email
        $mailSent = mail($to, $subject, $message, $headers);
        
        if ($mailSent) {
            // Set success flag for the popup
            $success = true;
        } else {
            $errors[] = "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <style>
        :root {
            --bg-color:rgba(255, 253, 248, 0);
            --text-main: #1A1A1A;
            --text-muted: #555555;
            --pink: #FF5FA2;
            --orange: #FF9966;
            --yellow: #FFE760;
            --lime: #C4F24B;
            --aqua: #5DE2E6;
            --error: #FF3333;
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }
        
        
        .contact-info {
            flex: 1;
            min-width: 300px;
        }
        
        .contact-form {
            flex: 1;
            min-width: 300px;
        }
        
        .form-box {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            color: var(--pink);
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: var(--text-muted);
        }
        
        .required:after {
            content: " *";
            color: var(--pink);
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
            background-color: rgba(255, 255, 255, 0.7);
        }
        
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--aqua);
            outline: none;
            box-shadow: 0 0 0 2px rgba(93, 226, 230, 0.2);
        }
        
        textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: var(--pink);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-weight: bold;
        }
        
        .submit-btn:hover {
            background-color: #ff4785;
            transform: translateY(-2px);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .error-message {
            color: var(--error);
            margin-bottom: 15px;
            padding: 10px;
            background-color: rgba(255, 51, 51, 0.1);
            border-radius: 5px;
            border-left: 4px solid var(--error);
        }
        
        .error-list {
            list-style-type: none;
        }
        
        .success-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            text-align: center;
            max-width: 90%;
            width: 400px;
            animation: fadeIn 0.3s;
            border-top: 5px solid var(--lime);
        }
        
        .success-popup h3 {
            color: var(--lime);
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        .success-popup p {
            margin-bottom: 20px;
        }
        
        .success-popup button {
            background-color: var(--lime);
            color: var(--text-main);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .success-popup button:hover {
            background-color: #b2e03a;
        }
        
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translate(-50%, -55%); }
            to { opacity: 1; transform: translate(-50%, -50%); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            
            .form-box {
                padding: 20px;
            }
            
            h2 {
                font-size: 24px;
            }
        }
        
        @media (max-width: 480px) {
            .contact-container {
                margin: 10px auto;
            }
            
            .form-box {
                padding: 15px;
            }
            
            input[type="text"],
            input[type="email"],
            input[type="tel"],
            select,
            textarea {
                padding: 10px;
                font-size: 14px;
            }
            
            .submit-btn {
                padding: 10px 20px;
                font-size: 14px;
                width: 100%;
            }
            
            .success-popup {
                width: 90%;
                padding: 20px;
            }
            
            .success-popup h3 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
     
        <div class="contact-form">
            <div class="form-box">
                <h2>Formulaire de contact</h2>
                
                <?php if (!empty($errors)): ?>
                    <div class="error-message">
                        <ul class="error-list">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="fullname" class="required">Nom complet</label>
                        <input type="text" id="fullname" name="fullname" value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="required">E-mail</label>
                        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Votre téléphone</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Le nom de votre société</label>
                        <input type="text" id="company" name="company" value="<?php echo isset($_POST['company']) ? htmlspecialchars($_POST['company']) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="required">Sujet</label>
                        <select id="subject" name="subject" required>
                            <option value="">-- Sélectionner un sujet --</option>
                            <option value="suj1" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'suj1') ? 'selected' : ''; ?>>Sujet 1</option>
                            <option value="suj2" <?php echo (isset($_POST['subject']) && $_POST['subject'] == 'suj2') ? 'selected' : ''; ?>>Sujet 2</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="required">Message</label>
                        <textarea id="message" name="message" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Envoyer le message</button>
                </form>
            </div>
        </div>
    </div>
    
    <?php if (isset($success) && $success): ?>
        <div class="overlay" id="overlay" style="display: block;"></div>
        <div class="success-popup" id="successPopup">
            <h3>Message envoyé!</h3>
            <p>Votre message a été envoyé avec succès. Nous vous contacterons bientôt.</p>
            <button onclick="closePopup()">Fermer</button>
        </div>
        
        <script>
            function closePopup() {
                document.getElementById('overlay').style.display = 'none';
                document.getElementById('successPopup').style.display = 'none';
            }
            
            // Close popup when clicking outside
            document.getElementById('overlay').addEventListener('click', closePopup);
        </script>
    <?php endif; ?>
    
</body>
</html>
