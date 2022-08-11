
    <?php

    error_reporting(E_ALL);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $card = $_POST['card'];
    $cardNumber = $_POST['cardNumber'];
    $expireMM = $_POST['expireMM'];
    $expireYY = $_POST['expireYY'];


    $form_data = array(
        array("name", $name),
        array("email", $email),
        array("password", $password),
        array("card", $card),
        array("cardNumber", $cardNumber),
        array("expireMM", $expireMM),
        array("expireYY", $expireYY),
    );


    $fp = fopen('registrations.csv', 'w');


    foreach ($form_data as $fields) {
        fputcsv($fp, $fields);
    }

    fclose($fp);

    ?>
