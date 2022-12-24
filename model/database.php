<?php

function db_connect(){
$host= 'localhost';
$db_name='infotech';
$user_name= 'root';
$pass = '';

try {
    $db = new PDO("mysql:host=".$host.";dbname=".$db_name,$user_name,$pass);

} catch (Exception $e) {
   echo 'Error' .$e;
}

return $db;
}

?>