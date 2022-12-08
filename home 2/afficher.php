<!DOCTYPE html>
<html>
<head>
	<title>Affichage</title>
</head>
<body>
	<h1>DATA</h1>
	<hr>
	<table border="2">
		<tr>
			<th>Nom</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Comment</th>
		</tr>
	<?php
	require 'confi.php';
	$req="SELECT *FROM report";
	$query=mysqli_query($con,$req);
	while($rows=mysqli_fetch_assoc($query))
	{
        echo "<tr>";
        echo "<td>".$rows['name']."</td>";
        echo "<td>".$rows['mobile']."</td>";
        echo "<td>".$rows['email']."</td>";
        echo "<td>".$rows['comment']."</td>";
        echo "</tr>";
	}
	?>
	</table>

</body>
</html>