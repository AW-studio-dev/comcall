<?php include('../fixed/header.php'); ?>
<?php include('../fixed/hero.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Rejoindre - COMCALL</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #FFFDF8;
            --pink: #FF5FA2;
            --orange: #FF9966;
            --yellow: #FFE760;
            --lime: #C4F24B;
            --aqua: #5DE2E6;
            --dark-text: #1A1A1A;
            --muted-text: #555555;
        }
        
        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, rgba(255,253,248,0.9), rgba(93,226,230,0.1), rgba(255,223,96,0.1));
            color: var(--dark-text);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        
        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .title-image {
            width: 100%;
            height: auto;
            margin-bottom: 3rem;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .section {
            margin-bottom: 3rem;
        }
        
        .section h2 {
            font-size: 2.5rem;
            color: var(--pink);
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-align: center;
        }
        
        .section p {
            font-size: 1.2rem;
            color: var(--dark-text);
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .poles-container {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .pole {
            flex: 1 1 300px;
            background-color: rgba(255,255,255,0.8);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .pole::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, 
                rgba(255,95,162,0.1) 0%, 
                rgba(255,153,102,0.1) 25%, 
                rgba(93,226,230,0.1) 50%, 
                rgba(196,242,75,0.1) 75%);
            transform: rotate(45deg);
            z-index: 0;
            animation: moveShape 15s infinite linear;
        }
        
        @keyframes moveShape {
            0% { transform: rotate(45deg) translateX(0); }
            50% { transform: rotate(45deg) translateX(-50%); }
            100% { transform: rotate(45deg) translateX(0); }
        }
        
        .pole-content {
            position: relative;
            z-index: 1;
        }
        
        .pole:hover {
            transform: translateY(-5px);
        }
        
        .pole h3 {
            color: var(--orange);
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .pole p {
            font-size: 1.3rem;
            color: var(--dark-text);
            margin-bottom: 1.5rem;
        }
        
        .pole-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin: 1rem 0;
        }
        
        .apply-button {
            display: block;
            width: 200px;
            margin: 3rem auto;
            padding: 1rem 2rem;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
            font-size: 1.2rem;
            color: white;
            background-color: var(--pink);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255,95,162,0.3);
            text-align: center;
            text-decoration: none;
        }
        
        .apply-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        
        .apply-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255,95,162,0.4);
        }
        
        .apply-button:active {
            transform: translateY(1px);
        }
        
        .apply-button.clicked::before {
            left: 100%;
        }
        
        .apply-button.clicked {
            background-color: var(--lime);
        }
        
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 1rem;
            }
            
            .section h2 {
                font-size: 2rem;
            }
            
            .pole {
                flex: 1 1 100%;
            }
            
            .apply-button {
                width: 80%;
            }
        }
        
        @media (max-width: 480px) {
            .section h2 {
                font-size: 1.8rem;
            }
            
            .section p {
                font-size: 1.1rem;
            }
            
            .pole h3 {
                font-size: 1.6rem;
            }
            
            .pole p {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- First title image -->
        <img src="../images/determination-passion.jpg" alt="Détermination et Passion" class="title-image">
        
        <div class="section">
            <p>Détermination et Passion, deux valeurs essentielles qui nous caractérisent.</p>
            <p>Aujourd'hui, notre politique de recrutement est avant tout une politique humaine, travailler chez COMCALL c'est conclure un Partenariat avec nous : celui de l'embauche et de l'accompagnement à l'évolution de carrière.</p>
        </div>
        
        <div class="section">
            <h2>Pour honorer ce Partenariat, notre équipe est structurée autour de trois pôles :</h2>
            
            <div class="poles-container">
                <div class="pole">
                    <div class="pole-content">
                        <h3>Le recrutement</h3>
                        <p>identifier les candidats</p>
                        <img src="../images/recrutement-image.jpg" alt="Recrutement" class="pole-image">
                        <p>et les intégrer dans les meilleures conditions de</p>
                        <img src="../images/integration-image.jpg" alt="Intégration" class="pole-image">
                    </div>
                </div>
                
                <div class="pole">
                    <div class="pole-content">
                        <h3>La gestion du personnel</h3>
                        <p>à l'écoute de vos questions administratives, questions sur votre carrière ou votre environnement de travail.</p>
                    </div>
                </div>
                
                <div class="pole">
                    <div class="pole-content">
                        <h3>Formation</h3>
                        <p>vous accompagner dans votre évolution.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <p>Nos collaborateurs ont conclu ce Partenariat avec nous car leurs amis, connaissances ou collègues en étaient satisfaits. La cooptation est un de nos principaux vecteurs de recrutement, et un très bon marqueur de satisfaction en interne.</p>
            <p>Evidemment, notre processus de recrutement est un processus classique articulé autour de 2 à 3 entretiens avec différents collaborateurs, mais toutefois pas « mécanique ».</p>
        </div>
        
        <!-- Second title image -->
        <img src="../images/recrutement-enjeu.jpg" alt="Un recrutement est un enjeu fort" class="title-image">
        
        <div class="section">
            <p>Un recrutement est un enjeu fort pour vous et COMCALL le comprend avant la première poignée de main, chaque recrutement est animé d'une énergie renouvelée et sincère parce qu'il s'agit d'évoquer vos ambitions, vos attentes et de vous proposer de construire un parcours.</p>
        </div>
        
        <!-- Apply button -->
        <a href="../forms/join.php" class="apply-button" id="applyButton">POSTULER</a>
    </div>

    <script>
        document.getElementById('applyButton').addEventListener('click', function(e) {
            e.preventDefault();
            this.classList.add('clicked');
            
            // Redirect after animation
            setTimeout(() => {
                window.location.href = this.href;
            }, 500);
        });
    </script>
</body>
</html>

<?php include('../fixed/footer.php'); ?>
