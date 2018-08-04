<?php
if(
    isset($_POST['senderEmail']) && !empty($_POST["senderEmail"]) &&
    isset($_POST['emailBody']) && !empty($_POST["emailBody"])
) {
    //smtptestemail5@gmail.com
    //smtptest1
    // $to needs to be set to the receiving email address
    $to = "andrewsgarver@gmail.com";
    // $from needs to be set to the email that's being used as smtp sender
    $from = "smtptestemail5@gmail.com";
    $subject = $_POST["emailSubject"];
    $body = "From: " . $_POST["senderEmail"] . "\n\n" .
        $_POST["emailBody"];

    echo wireMail($to, $from, $subject, $body);
}
else {
    echo "Failed to send email: Check params";
}
?>