<?php
include 'espace_membre.php';
if ((!isset($_SESSION['mail'])) && (!isset($_SESSION['erreur']))) {
    $_SESSION['mail'] = '';
    $_SESSION['erreur']= '';
}
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
        <div class="container">
            <div  class="row vertical-center-row" >
                <div id="connector" class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4" >

                    <form action="user_connection.php" id="form_connector" name="login" class="form-horizontal" method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <div class="col-md-8"><input name="mail" placeholder="Adresse Mail" value="<?php echo $_SESSION['mail']; ?>" class="form-control" type="text" id="UserUsername"/></div>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-8"><input name="mdp" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
                        </div> 
                        <p style="color:red;"><?php echo $_SESSION['erreur']; ?></p>
                        <div class="form-group">
                            <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
                        </div>

                    </form>

                </div>
            </div>
            <?php
                $_SESSION['mail'] = '';
                $_SESSION['erreur']= '';
            ?>
        </div>
        <footer><p>Développé par Yoann et Timothée. Et ça marche !</p></footer>
    </body>
</html>
