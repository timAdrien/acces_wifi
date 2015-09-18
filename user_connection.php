<?php
include 'espace_membre.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/connexion.css" />
        <title>Demande accès Wi-Fi</title>
    </head>
    <body>
        <?php
        try {
//on se connecte à la base de données:
            $connec = new PDO('mysql:host=127.0.0.1; dbname=db_acces_wifi', 'timyo', '123456');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $mail = $_POST['mail'];
        $password = $_POST['mdp'];

        try {
            $res = $connec->query('SELECT name, firstname FROM user WHERE mail = "' . $mail . '" AND password ="' . $password . '"');
            if ($row = $res->fetch(PDO::FETCH_OBJ)) {
                $_SESSION['mail'] = $mail;
// la fonction de redirection ------------ 
                function redir($url) {
                    echo "<script language=\"javascript\">";
                    echo "window.location='$url';";
                    echo "</script>";
                }
// Utiliser la redirection --------------- 
                redir("gestion_periph.php");
            } else {
                $_SESSION['mail'] = $mail;
                $_SESSION['erreur']= 'Adresse mail ou mot de passe invalide.';

                function redir($url) {
                    echo "<script language=\"javascript\">";
                    echo "window.location='$url';";
                    echo "</script>";
                }
                redir("index.php");
            }
        } catch (PDOException $e) {
            echo 'requête plantée';
        }

        unset($connec);
        ?>
        <footer><p>Développé par Yoann et Timothée. Et ça marche !</p></footer>
    </body>
</html>
