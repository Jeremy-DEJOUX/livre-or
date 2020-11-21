<header id="index_header" class="flex align_center">
        <ul id="ul_header_index" class="flex justify_around align_center">
          <?php if (isset($_SESSION['id'])) { ?>
            <li><a href='/Project Pool 2/livre-or/index.php'>Acceuil</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a></li>
            <li><i class='fas fa-user-alt'></i>
              <ul>
                <li><a class='' href='deconnexion.php'>Deconnexion</a></li>
              </ul>
            </li>
          <?php
        }
        else {
          ?>
            <li><a href='/Project Pool 2/livre-or/index.php'>Acceuil</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/livre-or.php'>Livre d'Or</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/commentaire.php'>Commentaire</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/inscription.php'>Inscription</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/connexion.php'>Connexion</a></li>
            <li><a href='/Project Pool 2/livre-or/pages/profil.php'><i class='fas fa-user-alt'></i></a></li>;
          <?php
        }
        ?>
        </ul>
</header>
