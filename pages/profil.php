<?php
require_once('../configs/config.php');

if ($_GET['id'] AND $_GET['id'] > 0) {
  $getid = intval($_GET['id']);
  $req_user = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id = $getid");
  $user_info = mysqli_fetch_assoc($req_user);
?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../CSS/profil.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ===================================HEADER========================================== -->
<header id="index_header" class="flex align_center">
        <ul id="ul_header_index" class="flex justify_around align_center">
          <?php if (isset($_SESSION['id'])) { ?>
            <li><a href='../index.php'>Acceuil</a></li>
            <li><a href='livre-or.php'>Livre d'Or</a></li>
            <li><a href='commentaire.php'>Commentaire</a></li>
            <li><i class='fas fa-user-alt'></i>
              <ul>
                <li><a class='' href='deconnexion.php'>Deconnexion</a></li>
              </ul>
            </li>
          <?php
        }
        else {
          ?>
            "<li><a href='index.php'>Acceuil</a></li>
            <li><a href='livre-or.php'>Livre d'Or</a></li>
            <li><a href='commentaire.php'>Commentaire</a></li>
            <li><a href='inscription.php'>Inscription</a></li>
            <li><a href='connexion.php'>Connexion</a></li>
            <li><a href='profil.php'><i class='fas fa-user-alt'></i></a></li>";
          <?php
        }
        ?>
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
