<?php
    if(isset($_POST['submit'])){

         $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];


    $to = "anopaishemeki@gmail.com";
    $body = "";

    $body .= "From:".$userName."\r\n";
    $body .= "Email:".$userEmail."\r\n";
    $body .= "Message:".$message."\r\n";

    if (mail($to,$messageSubject,$body)){
        echo"<h1>Sent Successfully! Thank you.".$userName.",We will contact you shortly!</h1>";
    }
    else{
        echo"Something went wrong";
    }
    }

   


?>