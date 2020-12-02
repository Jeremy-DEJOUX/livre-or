<?php require_once('../configs/config.php');
$querry = mysqli_query($bdd, 'SELECT commentaires.id_utilisateur , utilisateurs.login, commentaires.commentaire, commentaires.date FROM utilisateurs INNER JOIN commentaires ON commentaires.id_utilisateur = utilisateurs.id ORDER BY date DESC');

// echo "<pre>";
// print_r($bdd);
// echo "</pre>";

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

    <main class="flex flex_column justify_between align_center" id="livre_main">

      <h1>Livre d'Or</h1>

      <section>
        <?php
          while ($a = mysqli_fetch_assoc($querry))
          {
            echo "<br /> <br /> <br /> <br />"
            ."Le "
            ."<u>".$a['date']."</u>"
            ." <b>".$a['login']."</b>"
            ." a l'aissé ce commentaire:"
            ."<br/> <br/>"
            .$a['commentaire'];
          }
        ?>
      </section>

    </main>

    <?php require_once('../configs/footer.php') ?>

  </body>
</html>
