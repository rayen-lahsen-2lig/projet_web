
<?php

$con = mysqli_connect("localhost","root","","projetweb");

 if(!$con) {
  die( "Connexion non établie." .mysqli_connect_error()) ;
 }
 else{$First_name= $_POST['fn'];
    $Last_name= $_POST['ln'];
    $Phone_number= $_POST['phone'];
    $Email= $_POST['email'];
    $zip_code=$_POST['zc'];
    $Password= $_POST['psw'];
    $req="INSERT INTO  great_news( First_name, Last_name, Email,  phone, zip_code, Pass) VALUES('$First_name','$Last_name','$Email','$Phone_number','$zip_code','$Password')";
       if(mysqli_query($con,$req)) {
        
            echo"insertion avec succés";  
    
        }
        else
        echo $con-> error;
        mysqli_close($con);
 }
 ?>