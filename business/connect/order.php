<?php 
$productname = $_POST['productName'];
$Qte = $_POST['qte'];
$Size = $_POST['size'];
//database connection
$conn = new mysqli('localhost','root','','projetweb');
if( $conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
 } 
 else{
    $stmt = $conn->prepare("INSERT INTO `orders`(`productname`, `qte`, `size`) VALUES(?,?,?)");
    $stmt->bind_param("sss",$productname,$Qte,$Size);
    echo $conn->connect_error;
    $stmt->execute();
    
    echo"registration successfully...";
    $stmt->close();
    $conn->close();
    }
?>