<?php
    if(isset($_POST['subscribe']) && isset($_POST['email'])){
        $to = "ciobanugeorge98@gmail.com";
        $from  = $_POST['email'];
        $subject = "Email subscribe";
        $message = "Thank you for subscribing! Now you have 10% discount on the first order";
        $headers1 = "From: ".$to;
        $headers2 = "From: ".$from;
        $send1 = mail($to, $subject, $message, $headers2);
        $send2 = mail($from, $subject, $message, $headers1);
        header("Location: ../index.php");
    }