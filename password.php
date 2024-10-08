<?php

session_start();

echo 'Password: ' . $_SESSION['password'];

// Fase di produzione

var_dump($_SESSION);

?>