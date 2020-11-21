<?php
// ==========================FONCTION INSCRIPTION===================================
  function inscription($user_name, $password, $confirm_password, $bdd){
      $error = null;
      $user_name = mysqli_escape_string($bdd, htmlspecialchars(trim($user_name)));
      $password = mysqli_escape_string($bdd, htmlspecialchars(trim($password)));
      $confirm_password = mysqli_escape_string($bdd, htmlspecialchars(trim($confirm_password)));

      if (!empty($user_name) AND !empty($password) AND !empty($confirm_password)) {

          $user_name_len = strlen($user_name);
          if ($user_name_len <= 255) {
              $query = mysqli_query($bdd, "SELECT id FROM utilisateurs WHERE login = '$user_name'");
              $count = mysqli_num_rows($query);

              if (!$count) {

                if ($password = $confirm_password) {
                  $crypted_password = password_hash($password, PASSWORD_BCRYPT);
                  $insert = mysqli_query($bdd, "INSERT INTO utilisateurs(login, password) VALUES('$user_name', '$crypted_password')");

                  if ($insert) {
                    header('Location: ../pages/connexion.php');
                  }
                  else {
                    $error = "ERROR";
                  }
                }
                else {
                  $error = "Les mots de passe ne correspondent pas";
                }
              }
              else {
                $error = "Nom d'utilisateurs existant";
              }
            }
            else {
              $error = "Nom d'utilisateurs trop grand";
            }
          }
          else {
            $error = "Tous les champs doivent être remplis";
          }
    return $error;

  }

//===========================FONCTION DE CONNEXION================================
  function connexion($user_name, $password, $bdd){
    $error = null;
    $user_name = mysqli_escape_string($bdd, htmlspecialchars(trim($user_name)));
    $password = mysqli_escape_string($bdd, htmlspecialchars(trim($password)));

    if (!empty($user_name) AND !empty($password)) {
      $query = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$user_name'");
      $count = mysqli_num_rows($query);

      if ($count) {
        $result = mysqli_fetch_assoc($query);

        echo "<pre>";
        print_r($result);
        echo "</pre>";


        if (password_verify($password, $result['password'])) {
          $_SESSION['id'] = $result['id'];
          $_SESSION['login'] = $result['login'];
          // header("Location: profil.php?id=".$_SESSION['id']);
        }

        else {
          $error = "Ce n'est pas le bon mot de passe";
        }
      }
      else {
        $error = "Le login n'existe pas";
      }



    }
    else {
      $error = "Il faut remplir tous les champs";
    }
    return $error;
  }

 ?>
