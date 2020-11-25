<?php require_once('configs/config.php') ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <script src="https://kit.fontawesome.com/56188ecd90.js" crossorigin="anonymous"></script>
    <title>Acceuil</title>
</head>
<body class="flex flex_column justify_between">
<!-- ======================================================HEADER================================================ -->
    <?php require_once('configs/header.php'); ?>






<!-- ========================================================MAIN=================================================== -->
    <main class="flex align_center flex_column justify_around" id="main_index">
        <section class="flex align_center justify_around" id="Index_image_chateau">
        </section>


        <section class="flex align_center justify_around" id="Team">
            <article id="presentation_team">
                <h2>Notre Equipe est là pour vous acceuillir du matin au soir :</h2>
                <ul class="flex flex_column justify_around" id="Membres_team">
                    <li> <b>Yvain:</b> S'occupe des éléphants ou des orphelin.</li>
                    <li> <b>Merlin:</b> Le jardinnier cultive toutes nos plantes, légumes, fruit du chateau.</li>
                    <li> <b>Père Blaise:</b> Gardera vos enfants toutes lajournée en leur racontant ses histoires</li>
                    <li> <b>Lancelot:</b> Le garde du chateau si vous aves un problème cela serat à lui qu'il faudrat s'adresser</li>
                    <li> <b>Karadoc:</b> Le cuisinier du Chateau, vous concontectera nos meilleurs spécialité à base de jambon</li>
                    <li> <b>Bohort:</b> Le Chanteur de la troupe qui s'occuperat de vos soirée endiablé</li>
                    <li> <b>Perceval:</b> Le pecheur, aprés il ramène pas grand chose</li>
                    <li> <b>Leodagan:</b> Le sous-directeur souvent en déplacement dans la colline</li>
                    <li> <b>Arthur:</b> Le Roi</li>
                </ul>
            </article>

            <article id="team_img"></article>
        </section>


        <section class="flex align_center justify_around" id="contain_img">
            <article id="img1"></article>
            <article id="img2"></article>
            <article id="img3"></article>
        </section>


        <section class="flex align_center justify_around" id=""></section>
    </main>


<!-- =============================================================FOOTER========================================== -->
    <?php require_once('configs/footer.php') ?>
</body>
</html>
