<?php
try{
//on se connecte à la base de données:
$connec = new PDO('mysql:host=127.0.0.1; dbname=db_acces_wifi', 'timyo', '123456');
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'PB de connection à la BDD';
}

$password = 'bite';

$req = 'SELECT *';
$req .= 'FROM user';
$req .= 'WHERE firstname = "Yoann" ';
//$req .= $password;
try{
$res = $connec->query($req);
while ($row = $res->fetch(PDO::FETCH_OBJ)) {
    if (!empty($row)) {

        echo $row->name;

        echo 'Vous êtes à présent connecté !';
    } else {
        echo 'Vous êtes à tyer !';
    }
}

    }catch(PDOException $e){
    echo 'requête plantée';
}

