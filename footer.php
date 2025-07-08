<footer style="background-color:rgb(239, 232, 255); padding: 40px 20px 20px; font-family: Arial, sans-serif; color: #1A1A1A;">
    <div class="footer-container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Upper Section -->
        <div class="footer-upper" style="display: flex; flex-wrap: wrap; justify-content: space-between; margin-bottom: 30px;">
            <!-- Contact Section -->
            <div class="footer-contact" style="flex: 1; min-width: 250px; margin-bottom: 20px;">
                <h3 style="color: #FF5FA2; margin-bottom: 15px;">CONTACTEZ-NOUS!</h3>
                <div class="social-icons" style="display: flex; gap: 15px;">
                    <a href="#" target="_blank" style="display: inline-block;">
                        <img src="../images/facebook-icon.png" alt="Facebook" style="width: 30px; height: 30px;">
                    </a>
                    <a href="#" target="_blank" style="display: inline-block;">
                        <img src="../images/linkedin-icon.png" alt="LinkedIn" style="width: 30px; height: 30px;">
                    </a>
                    <a href="mailto:contact@comcall.com" style="display: inline-block;">
                        <img src="../images/email-icon.png" alt="Email" style="width: 30px; height: 30px;">
                    </a>
                    <a href="#" target="_blank" style="display: inline-block;">
                        <img src="../images/whatsapp-icon.png" alt="WhatsApp" style="width: 30px; height: 30px;">
                    </a>
                </div>
            </div>
            
            <!-- Logo Section (Middle) -->
            <div class="footer-logo" style="flex: 1; min-width: 250px; margin-bottom: 20px; text-align: center;">
                <a href="acceuil.php" style="display: inline-block;">
                    <img src="../images/logo.png" alt="Logo" style="max-width: 150px; height: auto;">
                </a>
            </div>
            
            <!-- Menu Section (Far Right) -->
            <div class="footer-menu" style="flex: 1; min-width: 250px; margin-bottom: 20px; text-align: right;">
                <ul style="list-style: none; padding: 0; margin: 0; display: inline-block; text-align: left;">
                    <div style="display: flex; gap: 30px;">
                        <div>
                            <li style="margin-bottom: 10px;"><a href="../pages/a-propos-de-nous.php" style="color: #1A1A1A; text-decoration: none; transition: color 0.3s;">À propos de nous</a></li>
                            <li style="margin-bottom: 10px;"><a href="../pages/notre-expertise.php" style="color: #1A1A1A; text-decoration: none; transition: color 0.3s;">Notre expertise</a></li>
                        </div>
                        <div>
                            <li style="margin-bottom: 10px;"><a href="../pages/nous-contact.php" style="color: #1A1A1A; text-decoration: none; transition: color 0.3s;">Nous contacter</a></li>
                            <li style="margin-bottom: 10px;"><a href="../pages/nous-rejoindre.php" style="color: #1A1A1A; text-decoration: none; transition: color 0.3s;">Nous rejoindre</a></li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
        
        <!-- Horizontal Separator -->
        <div class="footer-separator" style="width: 100%; height: 1px; background-color:rgba(85, 85, 85, 0.18); margin: 20px 0;"></div>
        
        <!-- Lower Section -->
        <div class="footer-lower" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">
            <div class="copyright" style="margin-bottom: 10px;">
                <p style="margin: 0; color: #555555;">2025 © COMCALL, Tous droits réservés.</p>
            </div>
            <div class="credits" style="margin-bottom: 10px;">
                <a href="https://awstudio.com" target="_blank" style="color: #555555; text-decoration: none; transition: color 0.3s;">réalisé par AW STUDIO</a>
            </div>
        </div>
    </div>
    
    <style>
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .footer-logo {
                order: -1;
                flex: 100%;
                margin-bottom: 30px;
            }
            .footer-contact, .footer-menu {
                flex: 1;
                min-width: 50%;
                text-align: left !important;
            }
            .footer-menu ul div {
                gap: 20px;
            }
        }
        
        @media (max-width: 576px) {
            .footer-contact, .footer-menu {
                min-width: 100%;
            }
            .footer-menu ul div {
                display: block !important;
            }
            .footer-menu ul div div {
                margin-bottom: 15px;
            }
        }
        
        /* Hover effects */
        a:hover {
            color: #FF5FA2 !important;
        }
    </style>
</footer>