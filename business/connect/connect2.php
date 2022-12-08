<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$work = $_POST['work'];
$country = $_POST['country'];
$plan = $_POST['plan'];
//database connection
$conn = new mysqli('localhost','root','','projetweb');
if( $conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
 } 
 else{
$stmt = $conn->prepare("insert into booking (firstname, lastname, mail , gender , phone , work, country,plan) values(?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssisss",$firstname, $lastname, $mail , $gender , $phone , $work, $country, $plan);
$stmt->execute();
echo"registration successfully...";
$stmt->close();
$conn->close();
}



?>