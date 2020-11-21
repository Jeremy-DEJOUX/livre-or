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
<?php require_once('header.php'); ?>


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
