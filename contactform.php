<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phoneNumber = $_POST['phoneNumber'];
    $company = $_POST['company'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "me@lewis-cattle.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $company, $txt, $headers);
    header("Location: index.html?mailsend#contact");
}

?>