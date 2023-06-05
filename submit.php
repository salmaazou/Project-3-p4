<?php


// Connect to the database using PDO
$host = 'localhost';
$dbname = 'mydatabase';
$username = 'root';
$password = '';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$messageUser = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "PHPMailer/src/Exception.php";
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";


$mail = new PHPMailer();
try {                   
    $mail->isSMTP();
    $mail->Host       = 'smtp.ethereal.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'maritza.langosh@ethereal.email';
    $mail->Password   = 'e9T8kK8WJJR4At3WUV';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;


    $mail->setFrom('maritza.langosh@ethereal.email'); // Sender
    $mail->addAddress($email); // Receiver

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<p> ' . $messageUser . ' </p>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Prepare and execute the SQL statement to insert the data
$stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':message', $messageUser);
$stmt->execute();

// Close the database connection
$pdo = null;

// Redirect the user back to the contact form page
header("Location: index.php");

?>
