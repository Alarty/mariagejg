<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    $name = $_POST['name'];
    $with = $_POST['with'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    $object = $name.' viens au mariage !';
    $to = 'au.laviron@gmail.com';
    $message = $name.'('.$email.') à écrit : \n'.$content


    $headers = array("From: $email",
        "Reply-To: $email",
        "X-Mailer: PHP/" . PHP_VERSION
    );

    $headers = implode("\r\n", $headers);
    $bool = mail($to, $object, $message, $headers);
    echo $bool
?>