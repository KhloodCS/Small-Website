<?php
 include 'layout/header.php';

// Establish a connection to MySQL
$servername = "localhost"; // Change as per your configuration
$username = "root"; // Change as per your configuration
$password = ""; // Change as per your configuration
$dbname = "mydatabase"; // Change as per your configuration

$conn = new mysqli('localhost', 'root', '', 'mydatabase');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values from registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Check if email already exists
    $check_query = "SELECT * FROM UserCredentials WHERE email='$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "هذا البريد الإلكتروني مسجل مسبقاً، يرجى اختيار بريد آخر";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL to insert data into users table
        $sql = "INSERT INTO UserCredentials (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "تم التسجيل بنجاح !";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
 include 'layout/footer.php';

$conn->close();
?>
