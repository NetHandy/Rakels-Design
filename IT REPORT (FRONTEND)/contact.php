<?php

    if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $visitor_email = $_POST['email'];
        $message = $_POST['message'];
        $date = $_POST['date'];
        $services = $_POST['services'];

        $email_from = "rehruthhila@gmail.com";
        $email_subject = "Booking...";
        $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email. \n".
                            "User Message: $message";

        $to = "rehruthhila@gmail.com";
        $headers = "From: $email_from \r\n";

        $headers = "Reply-To: $visitor_email \r\n";

        mail($to, $email_subject, $email_body, $headers);

        header("Location: index.php")
    }

?>