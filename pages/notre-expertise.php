<?php include '../fixed/header.php'; ?>
<?php include '../fixed/hero.php'; ?>

<!-- Main Content Section -->
<main class="expertise-main">
    <!-- Hero Text Section -->
    <section class="expertise-intro">
        <div class="container">
            <h1 class="expertise-title">Vos solutions externalisées en gestion de relation client</h1>
            <p class="expertise-description">
                COMCALL offre à ses clients des expertises « métier » acquises grâce à ses différents Managers.
                En effet, nous vous proposons nos spécialistes de leur domaine de compétence, ainsi que par l'expérience de plusieurs années d'activités.
            </p>
            <p class="expertise-description">
                C'est au sein d'une équipe pluridisciplinaire d'experts que sont imaginées et mises en œuvre les prestations de gestion professionnelle de la relation client.
            </p>
            <p class="expertise-description">
                Les prestations à « valeur ajoutée » proposées par COMCALL peuvent être classées dans l'une des 4 catégories suivantes :
            </p>
        </div>
    </section>

    <!-- Expertise Items Section -->
    <section class="expertise-items">
        <!-- Item 1 -->
        <div class="expertise-item animate-on-scroll">
            <div class="container">
                <div class="expertise-content">
                    <div class="expertise-image-wrapper">
                        <img src="images/incoming-calls.jpg" alt="Opérations d'appels Entrants" class="expertise-image">
                    </div>
                    <div class="expertise-text">
                        <h2 class="expertise-subtitle">Opérations d'appels Entrants</h2>
                        <ul class="expertise-list">
                            <li>Management de plateformes de « Service Client » (Cellules multi-canal & multilingue en front office, SAV, Traitement des débordements, Astreintes)</li>
                            <li>Management de plateformes techniques (Hotline, Helpdesk, SAV)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="expertise-item animate-on-scroll">
            <div class="container">
                <div class="expertise-content reverse">
                    <div class="expertise-image-wrapper">
                        <img src="images/outgoing-calls.jpg" alt="Opérations d'appels Sortants" class="expertise-image">
                    </div>
                    <div class="expertise-text">
                        <h2 class="expertise-subtitle">Opérations d'appels Sortants</h2>
                        <ul class="expertise-list">
                            <li>Cellules de Détection de projet</li>
                            <li>Qualification de fichiers</li>
                            <li>Cellules d'Acquisition « Client »</li>
                            <li>Cellules de Prise de Rendez-vous (Gestion d'agendas commerciaux multi-sites)</li>
                            <li>Sondages d'opinions, Études de satisfaction, ...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 3 -->
        <div class="expertise-item animate-on-scroll">
            <div class="container">
                <div class="expertise-content">
                    <div class="expertise-image-wrapper">
                        <img src="images/consulting.jpg" alt="Activités de conseil B.P.O." class="expertise-image">
                    </div>
                    <div class="expertise-text">
                        <h2 class="expertise-subtitle">Activités de conseil B.P.O.</h2>
                        <ul class="expertise-list">
                            <li>Conseil en externalisation de Call Center</li>
                            <li>Conseil en externalisation de processus CRM</li>
                            <li>Conseil en externalisation de processus de Back Office</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Item 4 -->
        <div class="expertise-item animate-on-scroll">
            <div class="container">
                <div class="expertise-content reverse">
                    <div class="expertise-image-wrapper">
                        <img src="images/bpo-management.jpg" alt="Gestion BPO" class="expertise-image">
                    </div>
                    <div class="expertise-text">
                        <h2 class="expertise-subtitle">Gestion BPO (Business Process Outsourcing)</h2>
                        <ul class="expertise-list">
                            <li>Mise à jour de sites Internet</li>
                            <li>Modération</li>
                            <li>Cellules de « Chat SMS »</li>
                            <li>Traitement d'e-mail</li>
                            <li>Analyse Datamining, ...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        --dark-text: #1A1A1A;
        --muted-text: #555555;
    }
    
    .expertise-main {
        background-color: var(--bg-color);
        color: var(--dark-text);
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
        overflow-x: hidden;
    }
    
    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
    }
    
    /* Intro Section */
    .expertise-intro {
        text-align: center;
        padding: 60px 0 40px;
        background: linear-gradient(135deg, var(--bg-color) 0%, #f9f4e8 100%);
    }
    
    .expertise-title {
        font-size: 2.5rem;
        color: var(--pink);
        margin-bottom: 30px;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }
    
    .expertise-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: var(--aqua);
        border-radius: 2px;
    }
    
    .expertise-description {
        font-size: 1.1rem;
        color: var(--muted-text);
        max-width: 800px;
        margin: 0 auto 20px;
        line-height: 1.7;
    }
    
    /* Expertise Items */
    .expertise-items {
        padding: 40px 0;
    }
    
    .expertise-item {
        margin-bottom: 60px;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease-out;
    }
    
    .expertise-item.visible {
        opacity: 1;
        transform: translateY(0);
    }
    
    .expertise-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 40px;
    }
    
    .expertise-content.reverse {
        flex-direction: row-reverse;
    }
    
    .expertise-image-wrapper {
        flex: 1 1 300px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .expertise-image-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
    
    .expertise-image {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }
    
    .expertise-image:hover {
        transform: scale(1.05);
    }
    
    .expertise-text {
        flex: 1 1 300px;
    }
    
    .expertise-subtitle {
        font-size: 1.8rem;
        color: var(--orange);
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .expertise-subtitle::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--lime);
    }
    
    .expertise-list {
        list-style-type: none;
        padding: 0;
    }
    
    .expertise-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 12px;
        color: var(--dark-text);
    }
    
    .expertise-list li::before {
        content: '•';
        color: var(--aqua);
        font-size: 1.5rem;
        position: absolute;
        left: 0;
        top: -3px;
    }
    
    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .expertise-title {
            font-size: 2rem;
        }
        
        .expertise-description {
            font-size: 1rem;
        }
        
        .expertise-subtitle {
            font-size: 1.5rem;
        }
        
        .expertise-content, .expertise-content.reverse {
            flex-direction: column;
        }
        
        .expertise-image-wrapper, .expertise-text {
            flex: 1 1 100%;
        }
        
        .expertise-image-wrapper {
            margin-bottom: 30px;
        }
    }
    
    @media (max-width: 480px) {
        .expertise-title {
            font-size: 1.8rem;
        }
        
        .expertise-intro {
            padding: 40px 0 30px;
        }
        
        .expertise-subtitle {
            font-size: 1.3rem;
        }
    }
</style>

<script>
    // Animation on scroll functionality
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.animate-on-scroll');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        animateElements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
