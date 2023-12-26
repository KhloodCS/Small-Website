<!DOCTYPE html>
<html>

<head>
    <title>آرائكم واقتراحاتكم</title>

</head>

<body>
<?php include 'layout/header.php';
?>
    <div class="two">
    <h2>آرائكم واقتراحاتكم</h2>
    </div>
    <?php
    $servername = "localhost"; // Update with your server details
    $username = "root"; // Update with your username
    $password = ""; // Update with your password
    $dbname = "mydatabase"; // Update with your database name

    // Create connection
    $conn = new mysqli('localhost', 'root', '', 'mydatabase');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from 'feedback' table
    $sql = "SELECT * FROM feedback";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Display data in a table
        echo "<table>";
        echo "<tr><th>الإسم</th><th>المدينة</th><th>تفضيلات الإعلانات</th><th>تعليقاتكم</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["advertisement_preference"] . "</td>";
            echo "<td>" . $row["comments"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data available";
    }

    // Close the connection
    $conn->close();
    ?>
  <?php include 'layout/footer.php';
?>
</body>

</html>
