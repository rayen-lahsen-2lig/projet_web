<?php 
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$conn = new mysqli('localhost','root','','projetweb');
if( $conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
 } 
$req="INSERT INTO form1(firstname,lastname,email,message) VALUES('$fname','$lname','$email','$msg')";
$query=mysqli_query($conn,$req);
if(isset($query)){
	echo " <h1> insertion avec succés</h1>";
} else {
	echo"<h1>Erreur</h1>";
}
?>

