<?php
  require_once("../configs/config.php");
  if (isset($_POST['submit'])) {
    $error = inscription($_POST['login_user'], $_POST['password_user'], $_POST['confirmpassword'], $bdd);
  }
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../CSS/inscription.css">
</head>
<body>
<header id="index_header" class="flex align_center">
        <ul id="ul_header_index" class="flex justify_around align_center">
            <li><a href="../index.php">Acceuil</a></li>
            <li><a href="livre-or.php">Livre d'Or</a></li>
            <li><a href="commentaire.php">Commentaire</a></li>
            <li><a href="inscription.php">Inscription</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <li><a href="profil.php">Profil</a></li>
        </ul>
    </header>



    <main class="flex align_center flex_column justify_around" id="main_inscription">
        <h1>Formulaire d'Inscription</h1>
        <?php if (isset($error)) {
            echo "<h2>$error</h2>";
        }?>
        <form action="inscription.php" method="post" id="formulaire_inscriptions" class="flex align_center flex_column justify_around">
            <section class="flex flex_column align_center">
                <label for="login_user">Login :</label>
                <input type="text" name="login_user" value="<?php if (isset($login)) { echo $login;  } ?>">
            </section>



            <section class="flex justify_around align_around">
                <article class="flex flex_column justify_around align_center">
                    <label for="password_user">Password :</label>
                    <input type="password" name="password_user">
                </article>

                <article class="flex flex_column justify_around align_center">
                    <label for="confirmpassword">Confirm Password :</label>
                    <input type="password" name="confirmpassword">
                </article>
            </section>

            <button type="submit" name="submit" >Valider</button>
        </form>
    </main>




    <footer></footer>
</body>
</html>
