<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ComCall</title>
    <style>
        :root {
            --mauve: #d8a1e8;
            --background:rgb(239, 232, 255);
            --text-main: #1A1A1A;
            --text-muted: #555555;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: var(--background);
            color: var(--text-main);
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 5%;
            background-color: var(--background);
            position: relative;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .logo-container img {
            max-height: 50px;
            width: auto;
            transition: transform 0.3s ease;
        }
        
        .logo-container img:hover {
            transform: scale(1.05);
        }
        
        nav.desktop-menu {
            display: flex;
            align-items: center;
        }
        
        nav.desktop-menu ul {
            display: flex;
            list-style: none;
        }
        
        nav.desktop-menu li {
            margin-left: 30px;
            position: relative;
        }
        
        nav.desktop-menu a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.3s ease;
            padding: 5px 0;
            position: relative;
        }
        
        nav.desktop-menu a:hover {
            color: var(--mauve);
        }
        
        nav.desktop-menu a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--mauve);
            transition: width 0.3s ease;
        }
        
        nav.desktop-menu a.active::after,
        nav.desktop-menu a:hover::after {
            width: 100%;
        }
        
        /* Mobile menu styles */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: var(--text-main);
        }
        
        nav.mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: var(--background);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        
        nav.mobile-menu ul {
            list-style: none;
        }
        
        nav.mobile-menu li {
            padding: 15px 5%;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        nav.mobile-menu a {
            text-decoration: none;
            color: var(--text-main);
            font-weight: 500;
            display: block;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            nav.desktop-menu {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            nav.mobile-menu.active {
                display: block;
            }
            
            .logo-container img {
                max-height: 40px;
            }
        }
        
        @media (max-width: 480px) {
            header {
                padding: 15px 3%;
            }
            
            .logo-container img {
                max-height: 35px;
            }
            
            .mobile-menu-btn {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <a href="acceuil.php">
                <img src="images/logo.png" alt="ComCall Logo">
            </a>
        </div>
        
        <nav class="desktop-menu">
            <ul>
                <li><a href="../pages/acceuil.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'acceuil.php' ? 'active' : ''; ?>">Accueil</a></li>
                <li><a href="../pages/a-propos-de-nous.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'a-propos-de-nous.php' ? 'active' : ''; ?>">À propos de nous</a></li>
                <li><a href="../pages/notre-expertise.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'notre-expertise.php' ? 'active' : ''; ?>">Notre expertise</a></li>
                <li><a href="../pages/nous-contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'nous-contact.php' ? 'active' : ''; ?>">Nous contact</a></li>
                <li><a href="../pages/nous-rejoindre.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'nous-rejoindre.php' ? 'active' : ''; ?>">Nous rejoindre</a></li>
            </ul>
        </nav>
        
        <button class="mobile-menu-btn" id="mobileMenuBtn">≡</button>
        
        <nav class="mobile-menu" id="mobileMenu">
            <ul>
                <li><a href="acceuil.php">Accueil</a></li>
                <li><a href="a-propos-de-nous.php">À propos de nous</a></li>
                <li><a href="notre-expertise.php">Notre expertise</a></li>
                <li><a href="nous-contact.php">Nous contact</a></li>
                <li><a href="nous-rejoindre.php">Nous rejoindre</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
            });
        });
        
        // Highlight current page in mobile menu
        const currentPage = '<?php echo basename($_SERVER['PHP_SELF']); ?>';
        mobileLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.style.color = 'var(--mauve)';
                link.style.fontWeight = 'bold';
            }
        });
    </script>
