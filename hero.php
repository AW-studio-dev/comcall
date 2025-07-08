<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero-container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .hero-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('../images/your-background-image.jpg'); /* Replace with your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            z-index: -1;
        }

        .hero-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .hero-title {
            max-width: 80%;
            height: auto;
            object-fit: contain;
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .hero-title {
                max-width: 70%;
            }
        }

        @media (max-width: 992px) {
            .hero-title {
                max-width: 80%;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                max-width: 90%;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                max-width: 95%;
            }
            
            .hero-container {
                height: 80vh; /* Slightly smaller on mobile */
            }
        }

        @media (max-height: 500px) {
            .hero-title {
                max-height: 70vh;
            }
        }
    </style>
</head>
<body>
    <div class="hero-container">
        <div class="hero-background"></div>
        <div class="hero-content">
            <img src="../images/your-title-image.png" alt="Page Title" class="hero-title"> <!-- Replace with your PNG title image -->
        </div>
    </div>
</body>
</html>