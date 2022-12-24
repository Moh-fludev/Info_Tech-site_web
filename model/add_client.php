<?php
 session_start();
 include('fonctione.php');
include("database.php");
$db = db_connect();
if (isset($_POST['signup'])){
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$telephone= $_POST['telephone'];
$email= $_POST['email'];
$password = $_POST['password'];
$user_add= add_user($db,$nom,$prenom,$telephone,$email,$password);
     $requete = $db-> prepare('SELECT * FROM client WHERE email_client= ? AND pass= ?');
	 $requete -> execute(array($email,$password));
	 $count = $requete  -> fetch(PDO::FETCH_OBJ);
	 if ($count>0) {
		$_SESSION['username']=$email;
        $_SESSION['password']=$password;
		header("Location: ../index.php");
	 }
	
}
?>