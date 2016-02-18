<?php
    // require PHPMailer
    require("class.phpmailer.php");
    error_reporting(E_ERROR); 

    // validate submission
    // if (!empty($_POST["name"]) && !empty($_POST["dob"]) && !empty($_POST["email"])) 
    // {
        // instantiate mailer 
        $mail = new PHPMailer();

        // use SMTP
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; 
        $mail->Username = "nickpr93@gmail.com";
        $mail->Password = "velezsarsfield102493";
        $mail->SMTPSecure = "tls"; 

        // set From:
        $mail->From = 'nickpr93@gmail.com'; 

        // set To:
        $address = "nickpr93@gmail.com";
        $mail->AddAddress($address, "Host");

        // set Subject:
        $mail->Subject = "The Candidate";

        // set body
        $mail->Body =
            "This person just submitted an application to be considered for The Candidate:\n\n" .
            "Name: " . $_POST["name"] . "\n" .
            "Contact: " . $_POST["email"] . "\n" .
            "Age: " . $_POST["dob"] . "\n" .
            "Birthplace: " . $_POST["location"] . "\n" .
            "Current District: " . $_POST["district"] . "\n" .
            "Answer 1: " . $_POST["0a"]. "\n" .
            "Answer 2a: " . $_POST["1a1"]. "\n" .
            "Answer 2b: " . $_POST["1a2"]. "\n" .
            "Answer 2c: " . $_POST["1a3"]. "\n" .
            "Answer 3: " . $_POST["2a"]. "\n" .
            "Answer 4: " . $_POST["3a"]. "\n" .
            "YouTube Link: " . $_POST["4a"];

        if($mail->Send()) {
            header("Location: thankyou.html");
            exit;
            } 
        // else {
        //       echo "Mailer Error: " . $mail->ErrorInfo;
        //     }
?>