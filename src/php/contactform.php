<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "stepa.picard01@orange.com";
    $headers = "de: ".$mailFrom;
    $txt = "Vous avez reçu un e-mail de".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

?>