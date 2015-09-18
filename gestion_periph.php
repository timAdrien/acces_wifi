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


        try {
            $res = $connec->query('SELECT mac FROM equipment WHERE user_mail = "' . $_SESSION['mail'] . '"');
           while ($row = $res->fetch(PDO::FETCH_OBJ)){
               echo '<hr /> <br />';
               echo $row->mac;
           }
            
        } catch (PDOException $e) {
            echo 'requête plantée';
        }

        unset($connec);
        ?>
        <footer><p>Développé par Yoann et Timothée. Et ça marche !</p></footer>
    </body>
</html>

