<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$work = $_POST['work'];
$country = $_POST['country'];
//database connection
$conn = new mysqli('localhost','root','','projetweb');
if( $conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
    
 } 
 else{
$stmt = $conn->prepare("insert into form (firstname, lastname, mail , gender , phone , work, country) values(?,?,?,?,?,?,?)");
$stmt->bind_param("ssssiss",$firstname, $lastname, $mail , $gender , $phone , $work, $country);
$stmt->execute();
echo"registration successfully...";
$stmt->close();
$conn->close();
}



?>