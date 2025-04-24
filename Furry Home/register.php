<?php
$host = "localhost";
$username = "root";       
$password = "";           
$database = "furry_friends";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Handle registration
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
    $action = $_POST["action"];

    if ($action === "register") {
        $registerUsername = $_POST["registerUsername"];
        $registerEmail = $_POST["registerEmail"];
        $registerPassword = password_hash($_POST["registerPassword"], PASSWORD_DEFAULT);

        // Check if user already exists
        $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $check->bind_param("s", $registerEmail);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo "Email already registered.";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $registerUsername, $registerEmail, $registerPassword);
            if ($stmt->execute()) {
                echo "<script>
                        alert('Registration successful! Please log in.');
                        window.location.href = 'H1.html#login'; // Load modal and show login tab
                      </script>";
            } else {
                echo "Registration failed.";
            }
            $stmt->close();
        }
        $check->close();
    }

    // Handle login
    if ($action === "login") {
        $loginEmail = $_POST["loginEmail"];
        $loginPassword = $_POST["loginPassword"];

        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $loginEmail);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $usernameFound, $hashed_password);
            $stmt->fetch();

            if (password_verify($loginPassword,$hashed_password)) {
                $_SESSION["user_id"] = $id;
                $_SESSION["username"] = $usernameFound;
                echo "Login successful! Welcome, " . $usernameFound;

                header("Location: H1.php"); 
            exit();
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "Email not registered.";
        }
        $stmt->close();
    }
}

$conn->close();
?>
