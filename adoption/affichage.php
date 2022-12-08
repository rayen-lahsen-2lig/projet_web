<!DOCTYPE html>
<html>
<head>
	<title>Affichage</title>
</head>
<body>
	<h1>AFFICHAGE</h1>
	<hr>
	<table border="2">
		<tr>
			<th>Nom</th>
			<th>Prenom</th>
			<th>animal</th>
			<th>email</th>
            <th>tel</th>
            <th>adress</th>
		</tr>
	<?php
	require 'connex.php';
	$req="SELECT *FROM adoption";
	$query=mysqli_query($conn,$req);
	while($rows=mysqli_fetch_assoc($query))
	{$tel=$rows['tel'];
        echo "<tr>";
        echo "<td>".$rows['fname']."</td>";
        echo "<td>".$rows['lname']."</td>";
        echo "<td>".$rows['pname']."</td>";
        echo "<td>".$rows['email']."</td>";
        echo "<td>".$rows['tel']."</td>";
        echo "<td>".$rows['adresse']."</td>";
		echo"<td> <a href='supp.php?tel=".$tel."'> Supprimer </a></td>";
        echo "</tr>";

	}
	?>
	</table>

</body>
</html>
