<?php

    $to = "pinkshibatoken@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['Name'];
    $headers = "From: $from";
    $subject = "You have a message from PinkShiba Website";

    $fields = array();
    $fields{"firstName"}    = "First Name";
    $fields{"lastName"}    = "Last Name";
    $fields{"email"}    = "Email";
    $fields{"phone"}    = "Phone Number";
    $fields{"message"}   = "Message";
    

    $body = "Here is the message you got:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

   if( mail($to, $subject, $body, $headers)s)!==true)
   {
        die('Fail to send');


    }
    die('Success');

    }

?>