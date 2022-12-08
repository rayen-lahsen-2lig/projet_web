<?php
require 'connex.php';
$tel=$_GET['tel'];
$req="DELETE FROM adoption where tel='$tel'";
$query=mysqli_query($conn,$req);
if (isset($query)){
    echo "<h1>  Supprission Validée <h31>";
}else {
    echo "Echec de suprrission ";
}

?>