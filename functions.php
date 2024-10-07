<?php

// Funzioni

function getRandomPassword($password_length) {
    $random_password = '';
    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0; $i < $password_length; $i++) {
        $random_index = random_int(0, strlen($set) - 1);
        $random_password .= $set[$random_index];
    }
    return $random_password;
}

?>