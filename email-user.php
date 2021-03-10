<?php

    session_start();
    $to = $_SESSION['user_email'];
    $name = $_SESSION['user_name'];
    $from = "test@srisrinivastravels.com";
    $message = "Hi $name,\n\nYour enquiry has been submitted successfully.";
    $subject = "Thank you for contacting DG PRIMACH";
    $headers = "From: DG PRIMACH <test@srisrinivastravels.com>";
    
    $mail = mail($to, $subject, $message, $headers);
    
    if($mail){
        ?>
        <script type="text/javascript">
            window.location.href = "contact.php";
        </script>
        <?php
    }
?>