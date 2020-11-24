<?php require_once('../configs/config.php');

$querry = mysqli_query($bdd, "SELECT id_utilisateur, commentaire FROM commentaires ORDER BY id DESC");


 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/index.css">
    <title></title>
  </head>
  <body>
<?php require_once('header.php'); ?>

<main>
  <?php

  while ($a = mysqli_fetch_assoc($querry)) {
    echo "L'utilisateur ".$a['id_utilisateur']." A l'aissé ce commentaire: <br />";
    echo $a['commentaire']."<br /> <br />";
  }







  ?>
</main>
  </body>
</html>
