<header class="flex align_center" id="header">
  <nav class="flex align_center">
    <ul class="flex align_center justify_around" id="Menu">

<!-- ========================== IF WE ARE CONNECTED ============================= -->

      <?php if (isset($_SESSION['id'])) { ?>

        <li class="menu-html flex align_center"> <a href='/Project Pool 2/livre-or/index.php'>Acceuil</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a> </li>
        <li class="menu-html"> <i class='fas fa-user-alt'></i>
          <ul id="submenu">
            <li id="submenu_deconnexion"> <a class="" href="/Project Pool 2/livre-or/pages/profil.php"></a> </li>
          </ul>
        </li>

<!--=========================== IF WE ARE DOESN'T CONNECTED =============================== -->
      <?php } else { ?>

        <li class="menu-html"> <a href='/Project Pool 2/livre-or/index.php'>Acceuil</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a> </li>
        <li class="menu-html"> <a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a> </li>
        <li class="menu-html"> Profil <i class='fas fa-user-alt'></i>
          <ul class="submenu flex align_center">
            <li id="submenu_connexion"> <a href='/Project Pool 2/livre-or/pages/connexion.php'>Connexion</a> </li>
            <li id="submenu_inscription"> <a href='/Project Pool 2/livre-or/pages/inscription.php'>Inscription</a> </li>
          </ul>
        </li>

<!-- ==================================== END ==================================== -->
      <?php } ?>
    </ul>
  </nav>
</header>
