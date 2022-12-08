<!DOCTYPE html>
<html>
    <body>
    <h1>DATA</h1>
        <table border="1" width="50%">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        <?php
require 'connexion.php';
$req="SELECT * from form1";
$query=mysqli_query($con,$req);
while($rows=mysqli_fetch_assoc($query)){
    $email=$rows['email'];
echo "<tr>";
echo "<td>".$rows['fname']."</td>";
echo "<td>".$rows['lname']."</td>";
echo "<td>".$rows['email']."</td>";
echo "<td>".$rows['msg']."</td>";
echo "<td> <a href='del.php?email=".$email."'> Supprimer</a> </td>";
echo "</tr>";
}
?>
</table>
</body>
</html>



