<?php

ini_set("include_path", '/home/example3/php:' . ini_get("include_path")  );
    require 'Mail.php';

    // Define basic e-mail parameters:
    $recipient = 'super-callum@hotmail.com';
    $headers['From'] = 'contact@callumquigley.com';
    $headers['Reply-to'] = 'contact@callumquigley.com';
    $headers['To'] = 'super-callum@hotmail.com';
    $headers['Subject'] = 'This is the message subject';
    $headers['Date'] = date('r');
    $headers['Message-Id'] = '<' . uniqid() . '@callumquigley.com>';
    $headers['Content-Type'] = 'text/plain; charset=utf-8';
    $body = 'IS IT WORKING NOW?!?!?!?';

    // Define SMTP authentication parameters:
    $smtp_params['host'] = 'localhost';
    $smtp_params['auth'] = true;
    $smtp_params['username'] = 'contact@callumquigley.com';
    $smtp_params['password'] = 'POy}?ik2@r*o';

    // Create a Mail class instance with the above parameters, and then send the message:
    $message =& Mail::factory('smtp', $smtp_params);
    if($message->send($recipient, $headers, $body)){
   echo "success";
}

else{

echo "failure";}


?>