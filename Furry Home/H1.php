<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        
      .hero {
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px 20px;
            position: relative;
        }
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .hero img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .pet-card {
            border: 3px solid #121212;
            border-radius: 5px;
            padding: 15px;
            background-color: rgb(110, 137, 110);
            
        }
        .story-box {
        background-color: rgba(0, 0, 0, 0.7); 
        border-radius: 8px;
        color: #fff; 
        font-size: 1.2rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
        line-height: 1.6;
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




<!-- Hero Section -->
<section class="hero" style="position: relative; height: 100vh; background: url('Happy-Pet-28.jpg') no-repeat center center / cover;">
    <div class="container" style="position: absolute; top: 50%; right: 10%; transform: translateY(-50%); text-align: left; color: white;">
        <h1 style="color: black;">Welcome to Our Home</h1>
        <p style="background: rgba(0, 0, 0, 0.5); color: white; padding: 10px; border-radius: 5px; width: 300px;">Your journey to find a forever friend starts here!</p>
        <a href="Adoption.php" class="btn btn-success">Start Adopt Now</a>
    </div>
</section>

<!-- Pet Search Section -->
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-4">Find a Pet</h1>
<ul class="nav nav-tabs justify-content-center" id="petTabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="dog-tab" style="font-size: 1.5rem;" onclick="navigateToAdoption('dog')">Dog</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="rabbit-tab" style="font-size: 1.5rem;" onclick="navigateToAdoption('rabbit')">Rabbit</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="cat-tab" style="font-size: 1.5rem;" onclick="navigateToAdoption('cat')">Cat</button>
    </li>
</ul>

<script>
    // Function to navigate to adoption.html with the selected pet type as a query parameter
    function navigateToAdoption(petType) {
        window.location.href = `Adoption.php?pet=${petType}`;
    }
</script>


    
        <div class="tab-content py-4" id="petTabsContent">

            <!-- Common Pet Profiles -->
            <div class="tab-pane fade show active" id="pets" role="tabpanel">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pet-card">
                            <img src="a-yellow-lab-dog-laying-in-the-grass-ai-generated-photo.jpg" alt="Bella" class="img-fluid mb-3" style="width: 100%; height: auto; border-radius: 8px;">
                            <h5> Bella</h5>
                            <p>Friendly Labrador</p>
                            <a href="Applicationpage.php?name=Bella&age=1&breed=Labrador&description=Friendly&price=$120&image=c:\Users\MY\Documents\COM 2303\Furry Home\a-yellow-lab-dog-laying-in-the-grass-ai-generated-photo.jpg" class="btn btn-secondary">View Profile</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pet-card">
                            <img src="rabbit-pictures-mikqb90p9rr2bjt2.jpg" alt="Fluffy" class="img-fluid mb-3" style="width: 100%; height: auto; border-radius: 8px;">
                            <h5>Fluffy</h5>
                            <p> Cute white bunny</p>
                            <a href="Applicationpage.php?name=Fluffy&age=2&breed=rabbit&description=cute+white+bunny&price=$110&image=rabbit-pictures-mikqb90p9rr2bjt2.jpg" class="btn btn-secondary">View Profile</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pet-card">
                            <img src="pngtree-pet-cat-indoor-home-shooting-hd-puppet-cat-image_1044139.jpg" alt="Luna" class="img-fluid mb-3" style="width: 100%; height: auto; border-radius: 8px;">
                            <h5> Luna</h5>
                            <p> Calm and affectionate</p>
                            <a href="Applicationpage.php?name=Luna&age=2&breed=cat&description=Calm+and+affectionate&price=$145&image=c:\Users\MY\Documents\COM 2303\Furry Home\pngtree-pet-cat-indoor-home-shooting-hd-puppet-cat-image_1044139.jpg" class="btn btn-secondary">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Success Stories Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Success Stories</h2>
        <!-- First Story -->
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <img src="360_F_392252007_ye5adHCYu3d4A37jm8XvcVqk3Qzbwmql.jpg" class="img-fluid rounded" alt="Success Story 1">
            </div>
            <div class="col-md-6">
                <div class="story-box p-4 text-white">
                    <p>Max had spent months in the shelter, waiting for a family to call his own. When the Johnsons walked in, it was love at first sight—his wagging tail said it all. Now, Max enjoys long walks, playful afternoons with the kids, and cozy evenings by the fireplace. He’s brought endless joy and laughter to their home, proving that love and companionship can change lives. The Johnsons couldn’t imagine their family without Max, their loyal and loving forever friend.</p>
                </div>
            </div>
        </div>
        <!-- Second Story -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="story-box p-4 text-white">
                    <p> Luna was a timid shelter cat who had always shied away from attention, but everything changed when Emily walked into her life. From the moment they met, Luna seemed to know she had found her person, curling up in Emily's lap as if it were meant to be. Now, Luna spends her days napping peacefully in Emily's arms and playing with her favorite toys. Their bond is unbreakable, filled with warmth, purrs, and unconditional love. Emily calls adopting Luna the best decision she's ever made, proving that sometimes, the smallest creatures leave the biggest impact.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="woman-petting-sleeping-cat-844w.png" class="img-fluid rounded" alt="Success Story 2">
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
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
