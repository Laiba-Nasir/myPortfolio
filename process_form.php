<?php
//RESOURCES CITATION FOR process_form.php
// https://www.youtube.com/watch?v=2HVKizgcfjo&t=108s 
// https://stackoverflow.com/questions/1053424/how-do-i-get-php-errors-to-display 
// https://www.geeksforgeeks.org/how-to-check-form-submission-in-php/ 
// https://stackoverflow.com/questions/15800785/how-can-i-redirect-to-a-thank-you-page-in-php
// I used the websites above to provide the code, as I got stuck along the way, ChatGPT was useful in guiding me to the right direcion 
//https://chatgpt.com/?oai-dm=1


// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP MySQL username
$password = ""; // Default XAMPP MySQL password
$dbname = "portfolio"; // Make sure this matches your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_form_table (name, email, number, message) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ssss", $name, $email, $number, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to a thank you page with submitted data
        header("Location: thank_you.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&number=" . urlencode($number) . "&message=" . urlencode($message));
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted via POST, redirect to the form page
    header("Location: contact.html");
    exit();
}
?>

