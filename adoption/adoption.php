<?php 

$prenom=$_POST['f'];
$nom=$_POST['l'];
$animal=$_POST['p'];
$mail=$_POST['email'];
$tel=$_POST['tel'];
$adresse=$_POST['ad'];

require 'connex.php';
$req="INSERT INTO adoption (fname,lname,pname,email,tel,adresse) VALUES  ('$prenom','$nom','$animal','$mail','$tel','$adresse')";
$query=mysqli_query($conn,$req);
if(isset($query)){
	echo " <h1> Insertion Valide</h1>";
} else {
	echo"<h1>Echec de l'insertion</h1>";
}
?>
