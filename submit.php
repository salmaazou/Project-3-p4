<?php

// Get the form data
$name = $_POST['name'];
$onderwerp = $_POST['onderwerp'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connect to the database using PDO
$host = 'localhost';
$dbname = 'mydatabase';
$username = 'myusername';
$password = 'mypassword';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Prepare and execute the SQL statement to insert the data
$stmt = $pdo->prepare("INSERT INTO contacts (name,onderwerp , email, message) VALUES (:name, :onderwerp, :email, :message)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':onderwerp', $onderwerp);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $message);
$stmt->execute();

// Close the database connection
$pdo = null;

// Redirect the user back to the contact form page
header("Location: index.php");

$to = "[ your email ]";
$subject = "Another one";
$message = "Somebody has filled the contact form.";
$header = "from: VR-design@gmail.com";


mail($to, $subject, $message, $header);

?>
