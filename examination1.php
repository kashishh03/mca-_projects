<!DOCTYPE html>
<html lang="en">
<head>
    <title>Examination Details</title>
    <link rel="stylesheet" href="examination.css">
</head>
<body>
    <!-- Page Header -->
    <header>
        <h1>Examination Details</h1>
    </header>

    <!-- Examination Table Section -->
    <section>
        <table>
            <thead>
                <tr>
                    <th>Exam ID</th>
                    <th>Exam Name</th>
                    <th>Exam Date</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cuims";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from examination_table
                $sql = "SELECT exam_id, exam_name, exam_date, start_time, end_time, location FROM examination_table";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["exam_id"] . "</td>
                                <td>" . $row["exam_name"] . "</td>
                                <td>" . $row["exam_date"] . "</td>
                                <td>" . $row["start_time"] . "</td>
                                <td>" . $row["end_time"] . "</td>
                                <td>" . $row["location"] . "</td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available</td></tr>";
                }

                // Close the connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
