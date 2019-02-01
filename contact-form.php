<?php
    $name = $_Post['name'];
    $email = $_Post['email'];
    $message = $_Post['message'];

    $email_fr = 'vongp002@gmail.com';
    $email_sub = 'New Form';
    $email_bod = "User Name: $name.\n";

    $to = "ivongphakdy@gmail.com";

    $headers = "from: $email_fr";

    mail($to,$email_sub,$email_bod,$headers);

    header("Location: contact.html");

 ?>
