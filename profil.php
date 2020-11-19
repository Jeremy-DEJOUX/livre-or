<?php
if (isset($_POST['submit'])) {

    if ($_POST['login_user'] != "" && $_POST['password_user'] != "") {

            $login = $_POST['login_user'];
            $password = $_POST['password_user'];

            $bdd = new PDO('mysql:host=localhost;dbname=livreor;charset=utf8', 'root', '');
            $req = $bdd->prepare('');
            $req-> execute(array(
                'login_user' => $login,
                'password_user' => $password
            ));
        }
        else{
           $error = "Les mots de passe ne corespondent pas";
        }
    }




?>