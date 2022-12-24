<?php
function add_user($db,$nom,$prenom,$telephone,$email,$pass){
    $sql = 'INSERT INTO client(nom_client,prenom_client,tele_client,email_client,pass) VALUES(:nom_client,:prenom_client,:tele_client,:email_client,:pass)';
    $requete = $db-> prepare($sql);
    $requete-> bindvalue(':nom_client',$nom);
    $requete-> bindvalue(':prenom_client',$prenom);
    $requete-> bindvalue(':tele_client',$telephone);
    $requete-> bindvalue(':email_client',$email);
    $requete-> bindvalue(':pass',$pass);
    $requete-> execute();
    return $requete;
    }
    function shop_Article($db){

$sql = 'SELECT * FROM article';
$requete = $db -> prepare($sql);
$requete-> execute();
return $requete;
    }
    function article_get_one($db,$id_ar){

        $sql = 'SELECT * FROM article where id_ar=:id_ar';
        $requete = $db -> prepare($sql);
        $requete -> bindvalue(':id_ar',$id_ar);
        $requete-> execute();
        return $requete;
            }








?>