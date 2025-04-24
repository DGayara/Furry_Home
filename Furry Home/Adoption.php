<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;

        }

        .sidebar {
            max-width: 250px;
            padding: 10px;
            background-color: #f8f9fa;
            height: 100vh;
        }
        .pet-card {
            border: 1px solid #151515;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            background-color: beige;
        
        }
        .pet-card img {
            max-width: 100%;
            border-radius: 8px;
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

    <!-- Navigation Bar -->
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


    <div class="container-fluid mt-3" style="background-color: darkseagreen;">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <h5>Find Pet</h5>
                <form id="filterForm">
                    <div class="mb-3">
                        <label for="animalType" class="form-label">Select Animal</label>
                        <select class="form-select" id="animalType">
                            <option value="all">All</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                            <option value="rabbit">Rabbit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="breed" class="form-label">Select Breed</label>
                        <select class="form-select" id="breed">
                            <option value="all">All Breeds</option>
                            <option value="labrador">Labrador</option>
                            <option value="persian">Persian</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <select class="form-select" id="size">
                            <option value="all">All</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="features" class="form-label">Features</label>
                        <div>
                            <input type="checkbox" id="friendly" value="friendly"> Friendly<br>
                            <input type="checkbox" id="trained" value="trained"> Trained<br>
                            <input type="checkbox" id="energetic" value="energetic"> Energetic<br>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Colors</label>
                        <select class="form-select" id="color">
                            <option value="all">All Colors</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                            <option value="brown">Brown</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary w-100" onclick="applyFilters()">Find</button>
                </form>
            </div>

            <!-- Pet Profiles -->
            <div class="col-md-9" >
                <div class="row" id="petProfiles">
                    <!-- Sample Pet Cards -->
                    <div class="col-md-4 pet-card" data-animal="dog" data-breed="labrador" data-size="large">
                        <img src="German-Shepherd-dog-Alsatian.webp" alt="Dog">
                        <h5>Max</h5>
                        <p style="text-align: left";>Max is a 2-year-old German Shepherd, known for his large size and loyal, intelligent nature. As a breed, German Shepherds are known for their strong work ethic, protective instincts, and excellent training ability, making Max a devoted companion and a potential protector.</p>
                        <p>Breed: German Shepherd</p>
                        <p>Age: 2 years</p>
                        <p>Size: Large</p>
                        <p>Price: $100</p>
                        <a href="Applicationpage.php?name=Max&age=2&breed=German+Shepherd&description=Friendly+and+energetic&price=$100&image=c:\Users\MY\Documents\COM 2303\Furry Home\German-Shepherd-dog-Alsatian.webp" class="btn btn-success">
                        Apply</a>
                        
                        

                    </div>
                    <div class="col-md-4 pet-card" data-animal="dog" data-breed="labrador" data-size="large">
                        <img src="Labrador_on_Quantock_(2175262184).jpg" alt="Dog">
                        <h5>Buddy</h5>
                        <p style="text-align: left";>The Labrador is friendly, energetic, and playful.Buddy is a medium-large breed and female is typically slightly smaller and lighter.Buddy is  generally weight between 55 pounds.</p>
                        <p>Breed: Labrador</p>
                        <p>Age: 2 years</p>
                        <p>Size: Large</p>
                        <p>Price: $180</p>
                        <a href="Applicationpage.php?name=Buddy&age=2&breed=Labrador&description=Friendly+,+energetic+and+playful&price=$180&image=c:\Users\MY\Documents\COM 2303\Furry Home\Labrador_on_Quantock_(2175262184).jpg" class="btn btn-success">
                         Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="dog" data-breed="golden" data-size="small" data-color="brown" data-features="friendly,energetic">
                        <img src="unnamed-e1608055113294.jpg" alt="Dog">
                        <h5>Charlie</h5>
                        <p style="text-align: left";> Charlie is a medium to large-sized breed known for its intelligence, gentle temperament, and beautiful golden coat.Males are slightly larger and heavier than females, but smaller males can fall within the lower size range.weight 55 pounds and height stand about 21.5 to 24 inches (55-61 cm) at the shoulder, with smaller males at the lower end of this range.They are affectionate, friendly, and eager to please, making them excellent companions for families, children, and other pets.Typically 10-12 years with proper health care and a balanced diet. </p>
                        <p>Breed: Golden Retriever</p>
                        <p>Age: 1/2 years</p>
                        <p>Size: small</p>
                        <p>Price: $98</p>
                        <a href="Applicationpage.php?name=Charlie&age=1/2&breed=Golden+Retriever&description=affectionate,+friendly&price=$98&image=c:\Users\MY\Documents\COM 2303\Furry Home\unnamed-e1608055113294.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="dog" data-breed="beagle" data-size="medium" data-color="white" data-features="friendly">
                        <img src="download.jpg" alt="Dog">
                        <h5>Beagle</h5>
                        <p style="text-align: left";>Beagle, small hound dog breed popular as both a pet and a hunter. It looks like a small foxhound and has large brown eyes, hanging ears, and a short coat, usually a combination of black, tan, and white. The Beagle is a solidly built dog, heavy for its height. It generally excels as a rabbit hunter and is typically an alert, affectionate dog. There are two sizes recognized in the breed: Beagles standing 13 inches (33 cm) or less at the withers and weighing under 20 pounds (9 kg) and those standing more than 13 inches but not exceeding 15 inches (38 cm) at the withers and weighing 20 to 30 pounds (9 to 14 kg).</p>
                        <p>Breed: Beagle</p>
                        <p>Age: 1 year</p>
                        <p>Size: Medium</p>
                        <p>Price: $150</p>
                        <a href="Applicationpage.php?name=Beagle&age=1&breed=Beagle&description=Beagle+is+a+solidly+built+dog,+heavy+for+its+height&price=$150&image=c:\Users\MY\Documents\COM 2303\Furry Home\download.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="cat" data-breed="persian" data-size="small">
                        <img src="beautiful-pet-cat.jpg" alt="Cat">
                        <h5>Neko</h5>
                        <p style="text-align: left";>Persian cats have a distinctively round face with large, expressive eyes, a short, broad nose, and small ears. They have a stocky, muscular body with a short neck and short legs. The most striking feature of Persians is their long, thick coat, which requires regular grooming to prevent matting.They are generally quiet and reserved, preferring a peaceful and predictable environment. They enjoy a relaxed and leisurely lifestyle, making them great indoor companions.Persian cats are generally healthy, but they are prone to certain breed-specific health issues.The average lifespan of a Persian cat is around 12 to 16 years. With proper care, some Persians can live even longer.</p>
                        <p>Breed: Persian</p>
                        <p>Age: 1 year</p>
                        <p>Size: Small</p>
                        <p>Price: $84</p>
                        <a href="Applicationpage.php?name=Neko&age=1&breed=Persian&description=quiet+and+reserved,+preferring+a+peaceful+and+predictable+environment&price=$84&image=c:\Users\MY\Documents\COM 2303\Furry Home\beautiful-pet-cat.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="cat" data-breed="labrador" data-size="large">
                        <img src="gato-american-werihair-el-mas-energico-de-estados-unidos.webp" alt="cat">
                        <h5>Kitty</h5>
                        <p style="text-align: left";>The Elegance of Nature in a Curly Coat.These cats are known for having a friendly and balanced temperament. They are affectionate with their owners and get along well with other animals in the home.Caring for the American Wirehair is relatively simple. Although their curly coat may appear more fragile, it does not require as much maintenance as you might think.</p>
                        <p>Breed: American Wirehair Cat</p>
                        <p>Age: 2 years</p>
                        <p>Size: Medium</p>
                        <p>Price: $120</p>
                        <a href="Applicationpage.php?name=Kitty&age=2&breed=American+Wirehair+Cat&description=friendly+and+balanced+temperament&price=$120&image=c:\Users\MY\Documents\COM 2303\Furry Home\gato-american-werihair-el-mas-energico-de-estados-unidos.webp" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="cat" data-breed="siamese" data-size="small" data-color="brown" data-features="trained">
                        <img src="siamese-cat-price.jpg" alt="Cat">
                        <h5>Finn</h5>
                        <p style="text-align: left";>The Siamese cat is a striking and elegant breed known for its sleek appearance, intelligence, and vocal nature.Males are typically larger than females, with robust and muscular builds.Large males generally weigh between 10-15 pounds (4.5-6.8 kg).
                           They stand about 10-12 inches (25-30 cm) tall at the shoulder.Siamese cats have a distinctive pointed coloration with darker colors on the ears, face, paws, and tail, contrasting with a lighter cream or fawn-colored body.Siamese cats are social, affectionate, and highly vocal, often forming strong bonds with their human companions. They are playful, curious, and enjoy interactive activities.</p>
                        <p>Breed: Siamese</p>
                        <p>Age: 2 years</p>
                        <p>Size: Small</p>
                        <p>Price: $130</p>
                        <a href="Applicationpage.php?name=Finn&age=2&breed=Siamese&description=social,+affectionate,+and+highly+vocal&price=$130&image=c:\Users\MY\Documents\COM 2303\Furry Home\siamese-cat-price.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="cat" data-breed="mainecoon" data-size="medium" data-color="black" data-features="friendly,energetic">
                        <img src="pYo7fS9rA2eZV3DZi8ETwV-1200-80.jpg" alt="Cat">
                        <h5>Mochi</h5>
                        <p style="text-align: left";>The Maine Coon is a large, majestic cat breed admired for its friendly demeanor and luxurious coat.They stand about 10-16 inches (25-40 cm) tall at the shoulder.Including their long, bushy tail, males can measure up to 40 inches (1 meter) in length.They have a rectangular, muscular body with a broad chest, large paws, and a thick tail.Gentle giants, Maine Coons are affectionate, intelligent, and sociable. They enjoy interacting with people and adapt well to families with children or other pets.</p>
                        <p>Breed: Maine Coon</p>
                        <p>Age: 3 years</p>
                        <p>Size: Medium</p>
                        <p>Price: $220</p>
                        <a href="Applicationpage.php?name=Mochi&age=3&breed=Maine+Coon&description=affectionate,+intelligent,+and+sociable&price=$220&image=pYo7fS9rA2eZV3DZi8ETwV-1200-80.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="rabbit" data-breed="angora" data-size="small" data-color="white" data-features="friendly">
                        <img src="Raising-Angora-Rabbits-3-of-5.webp" alt="Rabbit">
                        <h5>Bun-Bun</h5>
                        <p style="text-align: left";>The Angora rabbit is a breed known for its long, soft, and silky fur. Originally from Turkey, these rabbits are primarily bred for their wool, which is highly valued in the textile industry. There are several types of Angora rabbits, including the English, French, and Satin Angora, each with slightly different fur characteristics. They have a gentle, calm temperament, making them popular as pets, though their wool requires regular grooming to prevent matting. Angora rabbits can come in various colors, and their wool is often spun into fine yarn for clothing and other textiles.</p>
                        <p>Breed: Angora</p>
                        <p>Age: 1 years</p>
                        <p>Size: Small</p>
                        <p>Price: $120</p>
                        <a href="Applicationpage.php?name=Bun-Bun&age=1&breed=Angora&description=gentle,+calm+temperament&price=$120&image=Raising-Angora-Rabbits-3-of-5.webp" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="rabbit" data-breed="europeanrabbit" data-size="large">
                        <img src="european-rabbit.webp" alt="rabbit">
                        <h5>Thumper</h5>
                        <p style="text-align: left";>The European Rabbit is a small to medium-sized species known for its gentle yet somewhat shy nature.Typically ranges between 2.25 to 5.5 pounds (1 to 2.5 kg).
                         They generally live for about 9 years in a safe and healthy environment.
                         European Rabbits have a semi-arched or mandolin-shaped body, characterized by a slim, athletic build with a slightly rounded back and a narrow chest.These rabbits tend to be shy, solitary, and skittish, particularly around unfamiliar people or animals, but can be affectionate once they feel comfortable in their surroundings.</p>
                        <p>Breed: European Rabbit</p>
                        <p>Age: 2 years</p>
                        <p>Size: Large</p>
                        <p>Price: $180</p>
                        <a href="Applicationpage.php?name=Thumper&age=2&breed=European+Rabbit&description=shy,+solitary,+and+skittish&price=$120&image=european-rabbit.webp" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="rabbit" data-breed="polishrabbit" data-size="small">
                        <img src="pexels-smooth-click-3828097.jpg" alt="rabbit">
                        <h5>Flopsy</h5>
                        <p style="text-align: left";>This rabbit is small in size, but it is not recommended for families with young children.The fun little bunny is energetic, he is kind. They love to be held and will sit still so that you can pick them up.hese small rabbits may be kind and gentle, they are also very energetic. They need room to roam and play. Even if the rabbit is kept indoors, it may be helpful to allow him or her to be outdoors for an hour or more a day.</p>
                        <p>Breed: Polish Rabbit</p>
                        <p>Age: 5 months</p>
                        <p>Size: Small</p>
                        <p>Price: $150</p>
                        <a href="Applicationpage.php?name=Flopsy&age=5+months&breed=Polish+Rabbit&description=energetic&price=$150&image=pexels-smooth-click-3828097.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <div class="col-md-4 pet-card" data-animal="rabbit" data-breed="checkeredgiantrabbit" data-size="medium">
                        <img src="206526CheckeredGiant.jpg" alt="Rabbit">
                        <h5>Snickers</h5>
                        <p style="text-align: left";>Checkered Giant rabbits are known for their distinctive black and white color pattern. The breed has a white base coat with large black spots or "checks" distributed evenly over its body. The breed is characterized by its size, typically weighing between 9-12 pounds or more. They have a well-proportioned and muscular body, with long, strong legs and large ears. They are known for being  docile, friendly and easy to handle. They have a calm temperament, making them a good choice for families with children. Checkered Giants are also good for showing and as a meat breed. They are also known to have a good lifespan.
                        </p>
                        <p>Breed: Checkered Giant Rabbit</p>
                        <p>Age: 2 years</p>
                        <p>Size: medium</p>
                        <p>Price: $225</p>
                        <a href="Applicationpage.php?name=Snickers&age=2&breed=Checkered+Giant+Rabbit&description=friendly+and+easy+to+handle&price=$225&image=206526CheckeredGiant.jpg" class="btn btn-success">Apply</a>
                    </div>
                    <script>
                        document.getElementById('apply-btn').addEventListener('click', function(e) {
                            // Get pet details from the card
                            const petCard = e.target.closest('.pet-card');
                            const petName = petCard.querySelector('h5').textContent;
                            const petAge = petCard.querySelector('p:nth-child(4)').textContent.replace('Age: ', '');
                            const petBreed = petCard.querySelector('p:nth-child(3)').textContent.replace('Breed: ', '');
                            const petDescription = petCard.querySelector('p:nth-child(2)').textContent;
                    
                            // Pass the details as URL parameters
                            window.location.href = `applicationpage.php?name=${encodeURIComponent(petName)}&age=${encodeURIComponent(petAge)}&breed=${encodeURIComponent(petBreed)}&description=${encodeURIComponent(petDescription)}`;
                        });
                    </script>

                    <!-- Add more pet cards as needed -->
                </div>
            </div>
        </div>
    </div>

    <script>
        function applyFilters() {
            const animalType = document.getElementById('animalType').value;
            const breed = document.getElementById('breed').value;
            const size = document.getElementById('size').value;

            const petCards = document.querySelectorAll('.pet-card');

            petCards.forEach(card => {
                const matchesAnimal = animalType === 'all' || card.dataset.animal === animalType;
                const matchesBreed = breed === 'all' || card.dataset.breed === breed;
                const matchesSize = size === 'all' || card.dataset.size === size;

                if (matchesAnimal && matchesBreed && matchesSize) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

  

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
