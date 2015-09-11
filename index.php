<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
        <title>Demande accès Wi-Fi</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="main">

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-1">
                                
                                <form action="/users/login" name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <div class="col-md-8"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername"/></div>
                                    </div> 

                                    <div class="form-group">
                                        <div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
                                    </div> 

                                    <div class="form-group">
                                        <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
                                    </div>

                                </form>
                                <p>Développé par Yoann et Timothée. Et ça marche</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
