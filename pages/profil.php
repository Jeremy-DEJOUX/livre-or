<?php
session_start();
//Connexion base de données livreor
$bdd = new PDO('mysql:host=localhost;dbname=livreor;charset=utf8', 'root', '');

if ($_GET['id'] AND $_GET['id'] > 0) {
  $getid = intval($_GET['id']);
  $req_user = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
  $req_user->execute(array($getid));
  $user_info = $req_user->fetch();


?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
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
        <h1>Profil de <?php echo $user_info['login']; ?></h1> <br />

        <h3>Login = <?php echo $user_info['login'];; ?></h3> <br />
    </main>



<!-- ====================================FOOTER============================================ -->
    <footer></footer>
</body>
</html>
<?php
}

 ?>
