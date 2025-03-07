<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "campaign_feedback";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM feedback ORDER BY submission_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
    <style>
        table { width: 80%; margin: auto; border-collapse: collapse; text-align: left; }
        th, td { padding: 10px; border: 1px solid black; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Feedback Received</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Rating</th>
            <th>Date</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['feedback']."</td>
                        <td>".$row['rating']."</td>
                        <td>".$row['submission_date']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5' style='text-align:center;'>No feedback available</td></tr>";
        }
        $conn->close();
        ?>
    </table>

</body>
</html>
