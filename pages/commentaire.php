<?php
require_once ('../configs/config.php');

if (isset($_POST['ajouter'])) {
  $error = ajout_comm($bdd, $_POST['ajout_commentaire']);
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <?php require_once('../configs/header.php') ?>

    <main class="flex align_center justify_around">
      <?php if (isset($error)) {
          echo "<h2>$error</h2>";
      }?>
      <form class="flex flex_column justify_around align_center" action="" method="post">

        <label for="ajout_commentaire">Commentaires</label>
        <textarea name="ajout_commentaire" rows="20" cols="80"></textarea>
        <button type="submit" name="ajouter">Ajouter</button>
      </form>
    </main>

    <?php require_once('../configs/footer.php') ?>

  </body>
</html>
