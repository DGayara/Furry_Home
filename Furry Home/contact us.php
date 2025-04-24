<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
       
        body {
            font-family: Arial, sans-serif;
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #386c58;
        }

        .contact-info img {
            max-width: 500px;
            height: auto;
        }

        .contact-info .details {
            max-width: 400px;
            font-size: 1.2rem;
        }

        .contact-info .details div {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .contact-info .details div i {
            margin-right: 10px;
            text-align: center;
        }

        .contact-form {
            padding: 20px;
            background-color: #e8e8e8;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #00274d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .faq-section {
            padding: 20px;
            background-color: #d6f5d6;
            text-align: center;
        }

        .faq-section h2 {
            margin-bottom: 20px;
        }

        .faq-section .faq-container {
            display: flex;
            justify-content: space-around;
        }

        .faq-section .faq {
            width: 45%;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
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
   

    <section class="contact-info">
        <img src="contact-removebg-preview.png" alt="Contact Image">
        <div class="details">
            <div><i>📞</i> Phone Number :0779981440 </div>
            <div><i>✉️</i> Email Address :<a href="mailto:furryfriendshome@gmail.com">furryfriendshome@gmail.com</a> </div>
            <div><i>📍</i> Location : NO 12;Kalidasa road,Matara.</div>
        </div>
    </section>

    <section class="contact-form">
        <h2>Contact Form</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your Email">

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" placeholder="Subject">

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Your Message"></textarea>

            <button type="submit">Send</button>
        </form>
    </section>

    <section class="faq-section">
        <h2>FAQ Section</h2>
        <div class="faq-container">
            <div class="faq">
                <h3>Do I have to be a certain age to visit with a pet?</h3>
                <p>For safety reasons, we ask that anyone 17 years old or younger is accompanied by an adult when visiting with an animal.</p>
            </div>
            <div class="faq">
                <h3>How Will I Know If I've Been Approved to Adopt a Pet?</h3>
                <p>After submitting an adoption inquiry, the shelter or rescue group with the pet you’re interested in will contact you. You may also reach out to the shelter or rescue group directly to follow up.</p>
            </div>
        </div>
    </section>

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
