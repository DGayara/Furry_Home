<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script> alert('Invalid request: You must be logged in to submit an application.');
          window.history.back(); </script>";
    exit;
}

$user_id = $_SESSION['user_id']; // make sure this is set when user logs in


$host = "localhost";
$username = "root";       
$password = "";           
$database = "furry_friends";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Sanitize and collect POST data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $zipcode = $_POST["zipcode"];

    $pet_name = $_POST["pet-name"];
    $pet_id = $_POST["pet-id"];

    $living_type = $_POST["living-type"];
    $ownership = $_POST["ownership"];
    $landlord_approval = $_POST["landlord-approval"];
    $fence_yard = $_POST["fenced-yard"];
    $household = $_POST["household"];

    $owned_pets = $_POST["owned-pets"];
    $caretaker = $_POST["caretaker"];
    $pet_time = $_POST["pet-time"];
    $alone_time = $_POST["alone-time"];
    $vacation_plans = $_POST["vacation-plans"];

    $adoption_reasons = $_POST["adoption-reason"];
    $veterinarian = $_POST["veterinarian"];
    $vet_details = $_POST["vet-details"];
    $requirement = $_POST["requirements"];

    $agreement1 = isset($_POST["agreement1"]) ? 1 : 0;
    $agreement2 = isset($_POST["agreement2"]) ? 1 : 0;
    $agreement3 = isset($_POST["agreement3"]) ? 1 : 0;

    // SQL Insert
    $sql = "INSERT INTO application (
        user_id, name, phone, email, address, zipcode,
        pet_name, pet_id,
        living_type, ownership, landlord_approval, fence_yard, household,
        owned_pets, caretaker, pet_time, alone_time, vacation_plans,
        adoption_reasons, veterinarian, vet_details, requirement,
        agreement1, agreement2, agreement3
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssssssssssssisssssiii",
        $user_id, $name, $phone, $email, $address, $zipcode,
        $pet_name, $pet_id,
        $living_type, $ownership, $landlord_approval, $fence_yard, $household,
        $owned_pets, $caretaker, $pet_time, $alone_time, $vacation_plans,
        $adoption_reasons, $veterinarian, $vet_details, $requirement,
        $agreement1, $agreement2, $agreement3
    );

    if ($stmt->execute()) {
        echo "<script> alert('Thank you!   Your adoption application has been submitted successfully.');
              window.location.href = 'Adoption.php' </script>";
    } else {
        echo "<script> alert('Error submitting form'); window.history.back(); </script> " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
