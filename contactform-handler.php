<?php
    $Name = $_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];

    $email_from="https://shafiqdaud.github.io/checkphp/contactform-handler.php";
    $email_subject="Suggestion/complaint";

    $email_body= "User Name : $Name .\n",
                    "User Email: $visitor_email .\n",
                    "User Message: $message .\n";

    $to="shafiqdaud49@gmail.com";

    $headers ="From: $email_from \r\n";

    $headers ="Reply-To: $visitor_email \r\n ";

    mail($to, $email_subject,$email_body,$headers);

    header("location: contactform.html");




?>
