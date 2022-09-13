<?php
$name = $_POSt[  " name "  ];
$visitor_email = $_POSt[  " email "  ];
$subject = $_post[ " subject "  ];
$message = $_post[  " message  "   ];

$email_from = "weedingspecialmehndidesign@gmail.com";


$email_subject = "New form Submission";

$email_body = "User Name: $name.\n" .
              "User Email\: $visitor_email.\n" .
              "Subject: $subject.\n".
              "User Message: $message .\n";



$to  =  'paliwalmegha99@gmail.com';



$headers = "Form: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n ";



mail($to,$email_subject,$email_body,$headers);


header("Location: contact.html");







?>
