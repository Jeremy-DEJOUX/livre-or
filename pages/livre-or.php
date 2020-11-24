<?php require_once('../configs/config.php');

// $querry = mysqli_query($bdd, "SELECT commentaires.id_utilisateur, commentaires.commentaire, utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateurs = utilisateurs.id ");
$querry = mysqli_query($bdd, 'SELECT commentaires.id_utilisateur , utilisateurs.login, commentaires.commentaire FROM utilisateurs INNER JOIN commentaires ON commentaires.id_utilisateur = utilisateurs.id ORDER BY utilisateurs.id DESC');

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

  while ($a = mysqli_fetch_assoc($querry)){
    echo "L'utilisateur ".$a['login']." A l'aissé ce commentaire: <br />";
    echo $a['commentaire']."<br /> <br />";

}

  ?>

</main>
  </body>
</html>
