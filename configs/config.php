<?php
session_start();
$bdd = mysqli_connect('localhost', 'root', '', 'livreor');
require_once('function.php');

if (isset($_GET['deconnexion'])) {
    session_destroy();
    header('Location: index.php');
}
?>
