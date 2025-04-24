<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }


        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .user-icon {
            width: 30px;
            height: 30px;
            background: gray;
            border-radius: 50%;
        }

        
        .container {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 10px;
}

.left-panel {
    flex: 1 1 50%; 
    max-width: 50%;
    box-sizing: border-box;
}

.left-panel .image-placeholder {
    width: 100%;
    height: 300px;
    background: lightgray;
    margin-bottom: 10px;
}

.pet-details {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.form-container {
    flex: 1 ;
    max-width: 100%; 
    min-width: 350px; 
    box-sizing: border-box;
    border: 20px solid #5b5959;
    border-radius: 10px;
    padding: 20px;
    background-color: #99bbb5;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    
}

.form-container h2 {
    margin-top: 0;
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: forestgreen;
}
form label {
      display: block;
      margin: 10px 0 5px;
  }

.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea{
    width: 100%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.form-container select {
    width: 50%;
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-container textarea {
    height: 80px; /* Adjust height */
}

.form-container label {
    margin-bottom: 5px;
    font-weight: bold;
    display: block;
}

.agreements {
    margin: 15px 0;
}

.agreements label {
    display: block;
}

.submit-button {
    background-color: #003366;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: auto; 
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



<main class="container">
    <div class="left-panel">
        <div class="image-placeholder">
            <img id="pet-image" src="" alt="Pet Image" style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px;">
        </div>
        <div class="pet-details">
            <p><strong>Name:</strong> [Pet Name]</p>
            <p><strong>Age:</strong> [Pet Age]</p>
            <p><strong>Breed:</strong> [Pet Breed]</p>
            <p><strong>Description:</strong> [Pet Description]</p>
            <p><strong>Price:</strong> [Pet Price]</p>
        </div>
    </div>
</main>

        
    
        
        <div class="form-container" >
            <h2 >Pet Adoption Application</h2>
            <form action="application.php" method="post">

                <!-- Applicant Information Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Applicant Information</h3>
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
        
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
        
                <label for="zipcode">ZIP/Postal Code:</label>
                <input type="text" id="zipcode" name="zipcode" required>
        
                <!-- Pet Details Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Pet Details</h3>
                <label for="pet-name">Pet Name:</label>
                <input type="text" id="pet-name" name="pet-name" required>
        
                <label for="pet-id">Pet ID:</label>
                <input type="text" id="pet-id" name="pet-id" required>
        
                <!-- Living Situation Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Living Situation</h3>
                <label>Do you live in a:</label>
                <select id="living-type" name="living-type">
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="other">Other</option>
                </select>
        
                <label>Do you own or rent your home?</label>
                <select id="ownership" name="ownership">
                    <option value="own">Own</option>
                    <option value="rent">Rent</option>
                </select>
        
                <label>If renting, do you have landlord approval for pets?</label>
                <select id="landlord-approval" name="landlord-approval">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
        
                <label for="fenced-yard">Does your home have a fenced yard?</label>
                <select id="fenced-yard" name="fenced-yard">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
        
                <label for="household">Who lives in your household?</label>
                <input type="text" id="household" name="household" placeholder="Adults and children (ages)">
        
                <!-- Pet Care Plans Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Pet Care Plans</h3>
                <label>Have you owned pets before?</label>
                <select id="owned-pets" name="owned-pets">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
        
                <label for="caretaker">Who will be the primary caretaker of this pet?</label>
                <input type="text" id="caretaker" name="caretaker" required>
        
                <label>Where will the pet spend most of its time?</label>
                <select id="pet-time" name="pet-time">
                    <option value="indoors">Indoors</option>
                    <option value="outdoors">Outdoors</option>
                    <option value="both">Both</option>
                </select>
        
                <label for="alone-time">How many hours will the pet be left alone each day?</label>
                <input type="number" id="alone-time" name="alone-time" min="0" required>
        
                <label for="vacation-plans">What are your plans for the pet when you travel or go on vacation?</label>
                <textarea id="vacation-plans" name="vacation-plans"></textarea>
        
                <!-- Additional Questions Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Additional Questions</h3>
                <label for="adoption-reason">Why do you want to adopt this pet?</label>
                <textarea id="adoption-reason" name="adoption-reason" required></textarea>
        
                <label>Do you have a veterinarian?</label>
                <select id="veterinarian" name="veterinarian">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
        
                <label for="vet-details">If yes, provide their name and contact:</label>
                <input type="text" id="vet-details" name="vet-details">
        
                <label for="requirements">Are there any specific requirements or preferences for the pet you want to adopt?</label>
                <textarea id="requirements" name="requirements"></textarea>
        
                <!-- Acknowledgements and Agreements Section -->
                <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: rgb(41, 82, 157);">Acknowledgements and Agreements</h3>
                <label><input type="checkbox" name="agreement1" required> I agree to provide a loving and safe environment for the pet.</label>
                <label><input type="checkbox" name="agreement2" required> I understand that this application does not guarantee adoption approval.</label>
                <label><input type="checkbox" name="agreement3" required> I am prepared to cover the costs of pet care, including food, medical care, and other expenses.</label>
        
                <button type="submit" class="submit-button" >Submit Application</button>
            </form>
        </div>
        
    </main>
    
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
    <script>
        // Get URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const petName = urlParams.get('name');
        const petAge = urlParams.get('age');
        const petBreed = urlParams.get('breed');
        const petDescription = urlParams.get('description');
        const petPrice = urlParams.get('price');
        const petImage = urlParams.get('image'); 
    
        // Set the pet details in the page
        if (petName && petAge && petBreed && petDescription && petPrice && petImage) {
            document.querySelector('.pet-details').innerHTML = `
                <p><strong>Name:</strong> ${petName}</p>
                <p><strong>Age:</strong> ${petAge}</p>
                <p><strong>Breed:</strong> ${petBreed}</p>
                <p><strong>Description:</strong> ${petDescription}</p>
                <p><strong>Price:</strong> ${petPrice}</p>
            `;
    
            // Update the image source
            document.getElementById('pet-image').src = petImage;
        } else {
            // Fallback if no parameters are provided
            document.querySelector('.pet-details').innerHTML = `<p>No pet details available.</p>`;
        }
    </script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
