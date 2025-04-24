<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Furry Friend Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        
        .navbar-brand {
    display: flex; 
    align-items: center; 
    gap: 10px; 
 }
 .navbar-brand span {
     color: rgb(13, 61, 52); 
     font-size: 2.5rem; 
     font-family: 'Bradley Hand ITC'; 
     font-weight: bold; 
     text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); 
 }

 .navbar-brand img {
   max-height: 60px; 
 }
 .modal-content {
    background-color: #f4f4f4; 
    color: #333; 
    border-radius: 10px;
    border: 5px solid #06ae76; 
 }




.hero-bg {
            background-image: url('slider_1.jpg.webp');
            background-size: cover;
            background-position: center;
        }

.modal-footer {
   background-color: #f9f9f9; 
   border-top: none;
}
footer {
    padding: 20px;
    text-align: center;
    background-color: #333538;
    color: #fff;
}

footer .footer-links a {
    color: #fff;
    text-decoration: none;
    margin: 0 10px;
}


.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap; 
}

.footer-content > div {
   margin: 10px; 
}
.follow-us {
text-align: left;
flex: 1;
}


.navigation {
text-align: center;
flex: 1;
}

.copyright {
text-align: right;
flex: 1;
}
.footer a {
    color: #ccc;
    text-decoration: none;
}
.footer a:hover {
    color: white;
}
        
    </style>
</head>
<body class="font-sans bg-gray-100">

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
            
        </div>
    </div>
</nav>


    <!-- Hero Section -->
    <header class="hero-bg text-white text-center py-20">
        <div class="bg-black bg-opacity-50 py-12">
            <h1 class="text-5xl font-bold">Welcome to Furry Friend Home</h1>
            <p class="text-xl mt-4">Your trusted partner in finding your perfect furry friend!</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="max-w-5xl mx-auto px-6 py-12">
        <h2 class="text-4xl font-semibold text-gray-800 mb-6">Who We Are</h2>
        <p class="text-gray-700 text-lg">Furry Friend Home is more than just a pet adoption platform; it’s a community dedicated to animal welfare and responsible pet ownership. Founded on the belief that every pet deserves a second chance at life, we work tirelessly to ensure that no tail goes unwagged and no heart goes unloved.</p>
    </section>

    <!-- What We Do Section -->
    <section class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6">What We Do</h2>
            <ul class="list-disc ml-8 text-gray-700 text-lg">
                <li><strong>Connecting Families with Pets:</strong> Browse through interactive pet profiles with detailed information about each animal's temperament, needs, and personality.</li>
                <li><strong>Providing Pet Care Resources:</strong> Access a library of expert tips and guides to help you care for your new companion.</li>
                <li><strong>Promoting Community Engagement:</strong> Join events, connect with fellow pet lovers, and support local animal shelters.</li>
            </ul>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6">Our Vision</h2>
            <p class="text-gray-700 text-lg">We envision a world where every pet finds a loving home and where communities unite to support the well-being of animals. By fostering compassion and education, we aim to create a future where no pet is left behind.</p>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="bg-white py-12">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-4xl font-semibold text-gray-800 mb-6">Why Choose Us?</h2>
            <ul class="list-disc ml-8 text-gray-700 text-lg">
                <li><strong>Trusted Partnerships:</strong> We collaborate with reputable shelters and rescue organizations to ensure the health and happiness of every animal.</li>
                <li><strong>Personalized Matchmaking:</strong> Our advanced search filters help you find the pet that perfectly fits your family’s lifestyle and preferences.</li>
                <li><strong>Ongoing Support:</strong> From adoption to pet care, we’re with you every step of the way.</li>
            </ul>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-green-500 text-white text-center py-12">
        <h2 class="text-4xl font-semibold">Join the Furry Friend Home Family</h2>
        <p class="text-lg mt-4">Ready to make a difference in a pet’s life? Start your adoption journey today and experience the joy of unconditional love.</p>
        <a href="H1.php">
        <button class="mt-6 px-6 py-3 bg-white text-green-500 font-semibold rounded-lg shadow-lg hover:bg-gray-200">Get Started</button></a>
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
