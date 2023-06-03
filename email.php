<?php
@include 'contact.php';
$conn = mysqli_connect('localhost','root','','email');

if (empty($_POST["email"])) {
    header("Location: ./index.php?content=message&alert=no-email");
} else {
    include("./connect_db.php");
    include("./functions.php");

    $email = sanitize($_POST["email"]);
    $name = $_POST["name"];

    $sql = "SELECT * FROM `subscribers` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists");
    } else {
        $sql = "INSERT INTO `subscribers` (`name`, `email`) VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            $to = $email;
            $subject = "Nieuws aanmelding";

            $message = "Beste $name,\n\nBedankt voor het aanmelden voor het nieuws van mboutrecht-virtual-reality-design site.\n\nMet vriendelijke groet,\nNieuws Site";

            $headers = "From: Virtualreality@mboutrecht.com"; 
            


            //  the following line to send the email
            mail($to, $subject, $message, $headers);

            // Show success message to the user
            echo "Bedankt voor het aanmelden! Een bevestigingsmail is verzonden naar uw e-mailadres.";

            // Redirect the user back to the contact form page
            header("Location: index.php");
        } else {
            header("Location: ./index.php?content=message&alert=register-error");
        }
    }
}



?>




?>
