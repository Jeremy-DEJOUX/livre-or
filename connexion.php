<?php
//Connexion base de données livreor
$bdd = new PDO('mysql:host=localhost;dbname=livreor;charset=utf8', 'root', '');

if (isset($_POST['submit'])) {
  $login_connect = htmlspecialchars($_POST['login_user']);
  $password_connect = sha1($_POST['password_user']);
}

?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="CSS/connexion.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ===================================HEADER========================================== -->
<header id="index_header" class="flex align_center">
        <ul id="ul_header_index" class="flex justify_around align_center">
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="livre-or.php">Livre d'Or</a></li>
            <li><a href="commentaire.php">Commentaire</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <li><a href="profil.php"><i class="fas fa-user-alt"></i></a></li>
        </ul>
    </header>


<!-- =======================================MAIN=============================================== -->
    <main class="flex align_center flex_column justify_around" id="main_connexion">
        <h1>Connexion</h1>

        <form action="profil.php" method="post" id="connexion_formulaire" class="flex align_center flex_column justify_around">
            <section class="flex flex_column align_center">
                <label for="login_user">Login :</label>
                <input type="text" name="login_user">
            </section>

             <section class="flex flex_column align_center">
                    <label for="password_user">Password :</label>
                    <input type="password" name="password_user">
            </section>

            <button type="submit" name="submit">Connexion</button>
        </form>
    </main>



<!-- ====================================FOOTER============================================ -->
    <footer></footer>
</body>
</html>
