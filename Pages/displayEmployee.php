<!DOCTYPE html>
<html>

<head>
    <title>Registered Users</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your external CSS file here -->
</head>

<body>
<?php include 'layout/header.php';
?>
<div class="two">    <h2>فريق عمل SEEFLYER.. نفخر بكم</h2>
</div>

    <?php
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

    // Fetch data from users table
    $sql = "SELECT * FROM UserCredentials";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="user-table">';
        echo '<table>';
        echo '<tr><th>إسم الموظف</th><th>البريد الإلكتروني</th></tr>';

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "</tr>";
        }

        echo '</table>';
        echo '</div>';
    } else {
        echo "لايوجد فريق عمل مسجل حالياً";
    }

    $conn->close();
    ?>
<?php include 'layout/footer.php';
?>
</body>

</html>