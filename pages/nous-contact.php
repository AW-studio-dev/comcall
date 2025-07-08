<?php include '../fixed/header.php'; ?>
<?php include '../fixed/hero.php'; ?>

<main class="contact-page">
    <section class="contact-intro">
        <div class="container">
            <div class="contact-heading animate__animated animate__fadeInDown">
                <h1 class="big-centered-text">Contactez <img src="images/logo.png" alt="Company Logo" class="contact-logo">, votre centre offshore dédié à l'externalisation de service client</h1>
            </div>
            
            <div class="contact-description animate__animated animate__fadeIn animate__delay-1s">
                <p>Vous souhaitez des informations complémentaires concernant notre société spécialisée en externalisation de service client ?</p>
                <p>Utilisez nos coordonnées ou écrivez-nous : nous accorderons une attention particulière à votre requête. Nous vous répondrons dans les plus brefs délais.</p>
            </div>
        </div>
    </section>

    <?php include '../forms/contact.php'; ?>
</main>

<?php include '../fixed/footer.php'; ?>

<style>
    /* Base Styles */
    :root {
        --bg-color: #FFFDF8;
        --pink: #FF5FA2;
        --orange: #FF9966;
        --yellow: #FFE760;
        --lime: #C4F24B;
        --aqua: #5DE2E6;
        --text-dark: #1A1A1A;
        --text-muted: #555555;
    }
    
    body {
        background-color: var(--bg-color);
        color: var(--text-dark);
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }
    
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
    }
    
    /* Contact Page Styles */
    .contact-page {
        padding: 60px 0;
    }
    
    .contact-intro {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .big-centered-text {
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 700;
        color: var(--pink);
        margin: 0 auto 30px;
        max-width: 900px;
        line-height: 1.3;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        animation: colorShift 8s infinite alternate;
    }
    
    .contact-logo {
        height: 1.2em;
        vertical-align: middle;
        margin: 0 10px;
        filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.2));
    }
    
    .contact-description {
        font-size: 1.2rem;
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto;
    }
    
    .contact-description p {
        margin-bottom: 15px;
    }
    
    /* Animations */
    @keyframes colorShift {
        0% { color: var(--pink); }
        20% { color: var(--orange); }
        40% { color: var(--yellow); }
        60% { color: var(--lime); }
        80% { color: var(--aqua); }
        100% { color: var(--pink); }
    }
    
    .animate__animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }
    
    .animate__fadeIn {
        animation-name: fadeIn;
    }
    
    .animate__fadeInDown {
        animation-name: fadeInDown;
    }
    
    .animate__delay-1s {
        animation-delay: 1s;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .contact-page {
            padding: 40px 0;
        }
        
        .big-centered-text {
            font-size: clamp(1.8rem, 6vw, 2.5rem);
            margin-bottom: 20px;
        }
        
        .contact-description {
            font-size: 1rem;
            padding: 0 15px;
        }
    }
    
    @media (max-width: 480px) {
        .big-centered-text {
            font-size: 1.5rem;
        }
        
        .contact-logo {
            height: 1em;
        }
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
<script>
    // Add intersection observer for scroll animations
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.animate__animated');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const animation = entry.target.getAttribute('data-animation');
                    entry.target.classList.add(animation);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
