

<?php
 include 'layout/header.php';

// Establish a connection to MySQL - Update these credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli('localhost', 'root', '');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS mydatabase";
$conn->query($sqlCreateDB);

// Select the database
$conn->select_db($dbname);

// Create the 'feedback' table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    location VARCHAR(100),
    city VARCHAR(50),
    zip VARCHAR(10),
    phone VARCHAR(20),
    email VARCHAR(100),
    info_source VARCHAR(50),
    previous_experience VARCHAR(50),
    advertisement_preference VARCHAR(50),
    interest_grocery TINYINT(1),
    interest_cleaning TINYINT(1),
    interest_skin_care TINYINT(1),
    interest_electronics TINYINT(1),
    interest_decor TINYINT(1),
    interest_clothes TINYINT(1),
    interest_mom_baby TINYINT(1),
    interest_diet TINYINT(1),
    interest_devices TINYINT(1),
    comments TEXT
)";
$conn->query($sqlCreateTable);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Email validation and handling
     $email = $conn->real_escape_string($_POST['email']);
     $check_query = "SELECT * FROM feedback WHERE email = '$email'";
     $result = $conn->query($check_query);
 
     if ($result->num_rows > 0) {
         // Email already exists, show error message to the user
         echo "هذا البريد الإلكتروني مسجل مسبقاً، يرجى اختيار بريد آخر";
        } else {
         // Email doesn't exist, proceed to save the data to the database
 
         // (Rest of your code for inserting data into the databas
    // Retrieve form data
    $firstName = $conn->real_escape_string($_POST['fName']);
    $lastName = $conn->real_escape_string($_POST['lName']);
    $location = $conn->real_escape_string($_POST['location']);
    $city = $conn->real_escape_string($_POST['city']);
    $zip = $conn->real_escape_string($_POST['zip']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $infoSource = $conn->real_escape_string($_POST['infoSource']);
    $prevExp = $conn->real_escape_string($_POST['prevExp']);
    $advPreference = $conn->real_escape_string($_POST['prevExp1']);
    $interestGrocery = isset($_POST['grocery']) ? 1 : 0;
    $interestCleaning = isset($_POST['cleaning']) ? 1 : 0;
    $interestSkinCare = isset($_POST['skinCare']) ? 1 : 0;
    $interestElectronics = isset($_POST['electronic']) ? 1 : 0;
    $interestDecor = isset($_POST['decor']) ? 1 : 0;
    $interestClothes = isset($_POST['clothes']) ? 1 : 0;
    $interestMomBaby = isset($_POST['momBaby']) ? 1 : 0;
    $interestDiet = isset($_POST['diet']) ? 1 : 0;
    $interestDevices = isset($_POST['devices']) ? 1 : 0;
    $comments = isset($_POST['comments']) ? $conn->real_escape_string($_POST['comments']) : '';

    // Insert form data into 'feedback' table
    $insert_query = "INSERT INTO feedback (first_name, last_name, location, city, zip, phone, email, info_source, previous_experience, advertisement_preference, interest_grocery, interest_cleaning, interest_skin_care, interest_electronics, interest_decor, interest_clothes, interest_mom_baby, interest_diet, interest_devices, comments) 
                     VALUES ('$firstName', '$lastName', '$location', '$city', '$zip', '$phone', '$email', '$infoSource', '$prevExp', '$advPreference', '$interestGrocery', '$interestCleaning', '$interestSkinCare', '$interestElectronics', '$interestDecor', '$interestClothes', '$interestMomBaby', '$interestDiet', '$interestDevices', '$comments')";
    if ($conn->query($insert_query) === TRUE) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
     }
}

 include 'layout/footer.php';

// Close the database connection
$conn->close();


?>