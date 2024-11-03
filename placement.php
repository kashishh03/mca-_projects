<?php
// Database connection
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password is empty
$dbname = "cuims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch placement data
$sql = "SELECT * FROM placement_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["company_name"] . "</td>
                <td>" . $row["job_role"] . "</td>
                <td>" . $row["package"] . "</td>
                <td>" . $row["placement_date"] . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No placement data available</td></tr>";
}

$conn->close();
?>
