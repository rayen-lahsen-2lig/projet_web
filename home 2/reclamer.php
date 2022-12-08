<?php 
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$comment=$_POST['comment'];
require 'confi.php';
$req="INSERT INTO report(name,mobile,email,comment) VALUES('$name','$mobile','$email','$comment')";
$query=mysqli_query($con,$req);
if(isset($query)){
	echo " <h1> insertion avec succés</h1>";
} else {
	echo"<h1>Erreur</h1>";

}





?>