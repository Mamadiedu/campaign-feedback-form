<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave empty if you didn’t set a password
$database = "campaign_feedback"; // Ensure this matches exactly with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Capture form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
    $rating = $_POST["rating"];

    // Step 3: Validate input (basic validation)
    if (empty($name) || empty($email) || empty($feedback) || empty($rating)) {
        die("All fields are required.");
    }

    // Step 4: Insert data into the database
    $sql = "INSERT INTO feedback (name, email, feedback, rating, submission_date) 
            VALUES ('$name', '$email', '$feedback', '$rating', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Step 5: Close connection
$conn->close();
?>
