<?php
session_start();
$_SESSION['autentication'] = 'n';
header('Location: ../index.php');
?>