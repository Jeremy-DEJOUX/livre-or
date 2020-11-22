<header class="flex justify_around align_center" id="header">
  <nav id="nav" class="flex justify_around align_center">
    <ul class="flex justify_around align_center" id="ul_header">

<!-- ========================== IF WE ARE CONNECTED ============================= -->

      <?php if (isset($_SESSION['id'])) { ?>

        <li><a href='/Project Pool 2/livre-or/index.php'>Acceuil</a></li>
        <li><a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a></li>
        <li><a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a></li>
        <li><i class='fas fa-user-alt'></i>
          <ul>
            <li><a class="" href="/Project Pool 2/livre-or/pages/profil.php"></a></li>
          </ul>
        </li>

<!--=========================== IF WE ARE DOESN'T CONNECTED =============================== -->
      <?php } else { ?>

        <li><a href='/Project Pool 2/livre-or/index.php'>Acceuil</a></li>
        <li><a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a></li>
        <li><a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a></li>
        <li id="logo_profil"><i class='fas fa-user-alt'></i>
          <ul id="submenu">
            <li><a href='/Project Pool 2/livre-or/pages/connexion.php'>Connexion</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/inscription.php'>Inscription</a></li>
          </ul>
        </li>

<!-- ==================================== END ==================================== -->
      <?php } ?>
    </ul>
  </nav>
</header>
