<?php

require_once 'core/bootstrap.php';
require_once 'view/modules/header.php';


if ($_POST['email'] && $_POST['password']) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (loginUser($email, $password)) {
        header("location: index.php");
    } else {
        echo "Dati non corretti";
    }
}

require_once 'view/login.php';

require_once 'view/modules/footer.php';

?>
