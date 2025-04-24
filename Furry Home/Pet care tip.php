<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption & Care</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    
        body {
            font-family: Arial, sans-serif;
            
        }
        
        
        

        .image-section {
            position: relative;
            margin-bottom: 20px;
        }
        .image-section img {
            width: 100%;
            height: auto;
        }
        .image-section h2 {
            font-size: 2rem;
            color: white;
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 8px;
        }
        .image-section p {
            position: absolute;
            top: 250px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px;
            width: 30%;
            border-radius: 8px;
            color: #333;
            font-size: 1rem;
            line-height: 1.6;
        }
        .tips-section {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
            position: relative;
            margin-top: -100px;
        
        }
        .tips-section .tip {
            border: 1px solid #436d5c;
            border-radius: 8px;
            padding: 15px;
            width: 30%;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            background-color: antiquewhite;
        }
        .tips-section .tip img {
            position: relative;
            width: 50%;
            height: 20%; 
            object-fit: cover;
            z-index: 1; 
        } 
        .articles {
           margin: 20px;
        }

        .articles .content {
          display: flex;
          justify-content: space-between;
          align-items: center;
        }

       .articles .text {
         width: 60%;
         padding-right: 20px; 
         text-align: left;
        }

        .articles .image {
          width: 35%; 
        }

       .articles .image img {
         width: 100%;
         height: auto;
        }

    .articles a {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        color: #063846; 
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: medium;
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
           
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
        </div>
    </nav>

    
<!-- Register/Login Modal -->
<div class="modal fade" id="registerLoginModal" tabindex="-1" aria-labelledby="registerLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerLoginModalLabel">Register/Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                

            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="registerLoginTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab">Register</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                    </li>
                </ul>
                <div class="tab-content mt-3" id="registerLoginTabsContent">
                    <!-- Register Form -->
                    <div class="tab-pane fade" id="register" role="tabpanel">
                        <form action="register.php" method="POST">
                            <input type="hidden" name="action" value="register">
                            <div class="mb-3">
                                <label for="registerUsername" class="form-label">Username</label>
                                <input type="text" class="form-control" id="registerUsername" name="registerUsername" placeholder="Enter your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="registerEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="registerEmail" name="registerEmail" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Register</button>
                        </form>
                    </div>
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login" role="tabpanel">
                        <form action="register.php" method="post">
                            <input type="hidden" name="action" value="login">
                            <div class="mb-3">
                                <label for="loginEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="loginPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <p class="mb-0">Don't have an account? 
                    <a href="#" onclick="switchToRegister()" class="text-primary">Register here</a>
                </p>
            </div>
            
        </div>
    </div>
</div>
<script>
    function switchToRegister() {
        const registerTab = document.getElementById('register-tab');
        registerTab.click();
    }
</script>


<script src="login.js"></script>

    


    <div class="container" style="padding: 20px;text-align: center;">
        
        <div class="image-section">
            <img src="GettyImages-1417882544.webp" alt="Pet Care Image">
            <h2>Welcome to Your Trusted Pet Care Guide</h2>
        <p>
        Caring for your pets goes beyond providing food and shelter; it’s about creating a bond that enriches both their lives and yours. 
        From understanding their nutritional needs to keeping them active, healthy, and happy, we're here to provide you with the insights 
        and tips you need to be the best pet parent you can be. 
        </p>
        </div>

        <div class="tips-section">
            <div class="tip">
                <img src="images-removebg-preview.png" alt="Nutrition Tips">
                <h3>Nutrition Tips</h3>
                <p>1.Choose the right food: Look for high-quality pet food that's made with natural ingredients and doesn't contain artificial colors, preservatives, or fillers.<br>
                   2.Consider your pet's age: Puppies and kittens need food that's formulated for their growth, while older pets may need food with fewer calories and joint support.<br> 
                   3.Feed your pet at the same time each day: This can help with digestion and reduce anxiety. <br>
                   4.Monitor your pet's weight: Regularly check your pet's weight and consult your vet if you notice any changes. <br>
                   5.Avoid human food: Some human foods, like chocolate, grapes, onions, and avocados, are toxic to pets. <br>
                   6.Give your pet healthy treats: Too many treats can lead to obesity. <br>
                   7.Consider wet food: Wet food can be more appealing to picky eaters and pets that need more hydration. <br>
                   8.Feed your pet raw food: Cooking meat can remove beneficial nutrients. <br>
                   9.Give your pet fruits and vegetables: Apples, carrots, and green beans are all safe and nutritious for pets. </p>
            </div>
            <div class="tip">
                <img src="360_F_430555483_7WLfpJV5czHDkRA76sXMhQ1HjRzcWJAT-removebg-preview.png" alt="Grooming">
                <h3>Grooming</h3>
                <p>The grooming process involves the groomer physically handling your pet in order to detect bumps, lumps, and skin irritations.<br>
                    While the specifics vary depending on each pet's needs, basic grooming for dogs usually includes bathing, brushing, nail trimming, and (depending on the breed) haircuts.<br>
                    Regular grooming is important for your pet's health and wellbeing, as well as their appearance. An untended coat can become long, matted, and uncomfortable for your pet. Grooming helps rid the coat of shed hair and dead skin while spreading natural oils.<br>
                </p>
            </div>
            <div class="tip">
                <img src="360_F_300270174_7lKB1P3J6HPW807ENCs9UPRYGMiitDDr-removebg-preview.png" alt="Training and Behavior">
                <h3>Training and Behavior</h3>
                <p><h5> methods</h5><br>
                    Positive reinforcement: This method uses rewards for desired behaviors, such as praise, food, or toys. It can help make learning more fun and strengthen the bond between the pet and its owner. <br>
                    Behavior modification: This method teaches a pet to choose specific behaviors in any given situation, without the need for commands. <br>
                    Obedience training: This method teaches a pet proper commands and behaviors. <br>
                    <h5>Benefit of training</h5> <br>
                    - Training can help make a pet more confident, especially for shy or timid pets. <br>
                    - Training can help improve communication between a pet and its owner. <br>
                    - Training can help strengthen the bond between a pet and its owner. <br>
                    - Training can provide mental stimulation for a pet, which can help tire them out and make them less likely to misbehave. </p>
            </div>
        </div>

        <div class="articles">
            <h3 style="color: rgb(10, 36, 10); font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Articles</h3>
        <div class="content">
            <div class="image">
            <img src="natural-pet-care-and-training-website.jpg" alt="Pet Care Tips" style="width: 100%; height: auto; margin-top: 20px;">
            </div>
            <div class="text">
            <p>Essential Pet Care Tips for a Happy and Healthy Life
                Taking care of your pet is a lifelong responsibility that involves more than just feeding and providing shelter. Here are some essential tips to ensure your pet leads a happy and healthy life.
                
                1. Proper Nutrition
                A balanced diet is one of the most important aspects of pet care. Make sure you're feeding your pet the right type of food based on their age, size, and health needs. High-quality, natural ingredients are key to promoting a healthy coat, energy levels, and overall health. Avoid feeding them human food, especially harmful items like chocolate, onions, and grapes.</p>
            </div>
        </div>
            <a href="Article.php">Read More &gt;</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
