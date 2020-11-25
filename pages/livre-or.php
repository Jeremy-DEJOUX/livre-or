<?php require_once('../configs/config.php');
$querry = mysqli_query($bdd, 'SELECT commentaires.id_utilisateur , utilisateurs.login, commentaires.commentaire, commentaires.date FROM utilisateurs INNER JOIN commentaires ON commentaires.id_utilisateur = utilisateurs.id ORDER BY date DESC');
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/livre-or.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <title>Livre d'Or</title>
  </head>

  <body>

    <?php require_once('../configs/header.php'); ?>

    <main flex flex_column justify_between align_center id="livre_main">

      <?php
        while ($a = mysqli_fetch_assoc($querry))
        {
          echo "Le ".$a['date']." L'utilisateur ".$a['login']." A l'aissé ce commentaire: <br />";
          echo $a['commentaire']."<br /> <br />";
        }
      ?>

    </main>

    <?php require_once('../configs/footer.php') ?>

  </body>
</html>
