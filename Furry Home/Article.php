<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            
        }
        header {
            background-color: #4caf50;
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-style: italic;
            font-size: x-large;
            padding: 1em 0;
            text-align: center;
        }


        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 15px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
        }

        .content {
            flex: 2;
            margin-left: 20px;
        }

        .images {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .images img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #4caf50;
        }

        h2 {
            margin-top: 20px;
            border-bottom: 2px solid #4caf50;
            padding-bottom: 5px;
        }

        p {
            line-height: 1.6;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }

    

        .highlight {
            background-color: #e8f5e9;
            padding: 10px;
            border-left: 5px solid #4caf50;
            margin: 20px 0;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="H1.php">
            <img alt="furry" src="Screenshot__211_-removebg-preview (1).png" width="100px">
            <span>Furry Friends Home</span>
            </a>
          </div>
        </div>
    </nav>
    <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="H1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Adoption.php">Adoption</a></li>
                <li class="nav-item"><a class="nav-link" href="Pet care tip.php">Pet Care Tips</a></li>
                <li class="nav-item"><a class="nav-link" href="contact us.php">Contact Us</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <?php include 'header.php'; ?>
            </ul>
            
        </div>
    
</nav>


    <header>
        <p>Guide to a healthy and happy pet</p>
    </header>

    <div class="container">
        <div class="images">
            <img src="veterinarian.jpg" alt="Pet Image 1">
            <img src="istockphoto-969077342-612x612.jpg" alt="Pet Image 2">
            <img src="obesity_dog-scaled-uai-2064x1376.jpg" alt="Pet Image 3">
            <img src="A-Guide-to-exercising-with-your-dog.jpg" alt="Pet Image 4">
        </div>
        <div class="content">
            <h2>1. Nutrition: Feeding Your Pet Right</h2>
            <p>Good nutrition is the cornerstone of your pet’s health. Here are some tips:</p>
            <ul>
                <li><strong>Balanced Diet:</strong> Provide age-appropriate, species-specific meals with the right nutrients.</li>
                <li><strong>Hydration:</strong> Ensure access to fresh, clean water at all times.</li>
                <li><strong>Avoid Human Foods:</strong> Some foods like chocolate, onions, and grapes are toxic to pets.</li>
                <li><strong>Portion Control:</strong> Avoid overfeeding to prevent obesity.</li>
                <li><strong>Special Needs:</strong> Tailor diets for pets with specific health conditions.</li>
            </ul>

            <h2>2. Grooming: Keeping Them Clean and Comfortable</h2>
            <p>Maintain hygiene and comfort with regular grooming:</p>
            <ul>
                <li><strong>Brushing:</strong> Brush regularly to reduce shedding and improve circulation.</li>
                <li><strong>Bathing:</strong> Use pet-safe shampoos; frequency depends on species and breed.</li>
                <li><strong>Nail Care:</strong> Trim nails every 3-4 weeks to prevent injuries.</li>
                <li><strong>Dental Care:</strong> Brush teeth 2-3 times a week to avoid dental issues.</li>
                <li><strong>Ear and Eye Cleaning:</strong> Use vet-approved solutions to keep them clean and infection-free.</li>
            </ul>

            <h2>3. Pet Behavior: Understanding Their Needs</h2>
            <p>Understanding your pet's behavior helps strengthen your bond:</p>
            <ul>
                <li><strong>Body Language:</strong> Learn cues like tail wagging, ear positions, and vocalizations.</li>
                <li><strong>Socialization:</strong> Expose pets to new environments and people to reduce fear.</li>
                <li><strong>Separation Anxiety:</strong> Gradually accustom your pet to being alone for short periods.</li>
                <li><strong>Stress Signs:</strong> Monitor changes in eating or bathroom habits as stress indicators.</li>
            </ul>

            <h2>4. Training Methods: Positive Reinforcement Works Best</h2>
            <p>Training ensures good behavior and mental stimulation:</p>
            <ul>
                <li><strong>Positive Reinforcement:</strong> Reward desired behaviors with treats and praise.</li>
                <li><strong>Consistency:</strong> Use the same commands and rules to avoid confusion.</li>
                <li><strong>Short Sessions:</strong> Keep training sessions brief and fun.</li>
                <li><strong>Social Training:</strong> Teach basic commands and ensure good public manners.</li>
                <li><strong>Professional Help:</strong> Hire a trainer for persistent behavioral issues.</li>
            </ul>

            <div class="highlight">
                <h2>Bonus Tips for Overall Wellness</h2>
                <p>Regular vet visits, exercise, and a safe environment contribute to a long and happy life for your pet.</p>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div class="follow-us">
                <p>Follow Us:</p>
                <div class="footer-links">
                    <a href="https://Facebook.com">Facebook</a>
                    <a href="https://Twitter.com">Twitter</a>
                    <a href="https://Instagram.com">Instagram</a>
                </div>
            </div>
            <div class="navigation">
                <p>Navigation Links: <a href="H1.php">Home</a> | <a href="contact us.php">Contact</a> | <a href="About.php">About</a></p>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Furry Friends Home</p>
            </div>
        </div>
    </footer>
</body>
</html>
