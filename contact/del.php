<?php
require 'connexion.php';
$email=$_GET['email'];
$req="DELETE FROM form1 where email='$email'";
$query=mysqli_query($con,$req);
if (isset($query)){
    echo " <h1> Supprission avec succés</h1>";
}else {
    echo " <h1> Erreur</h1>";
}

?>