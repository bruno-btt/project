<?php

session_start();

// Versione con tabella utenti
const ADMIN_EMAIL = 'admin@email.com';
const ADMIN_PASSWORD_HASH = '$2y$10$E1bHgWPXv3tBX.OucQO4c.V3.RPJYgNycAX6ZpgFrT7xPN0V81gkq'; //admin


function loginUser($email, $password)
{
    if ($email === ADMIN_EMAIL) {
        if (password_verify($password, ADMIN_PASSWORD_HASH)) {
            $_SESSION['loggedUser'] = [
                'name' => 'Admin', 'email' => $email,
            ];
            return true;
        }
    }
    return false;
}


function isLogged() {
    return isset($_SESSION['loggedUser']); 
}

function logoutUser()
{
   unset($_SESSION['loggedUser']);
}
   
 
