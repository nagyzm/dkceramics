<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dkceramics";

//Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
	die('connection failed'.$conn->connect_error);
}
$query = mysqli_query($conn, 'select * from clients');
?>
<link rel="stylesheet" href="css/style.css">
<div class="phpstyle">
<table>
	<tr>
		<th>Id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th class="email">Buy</th>
	</tr>

<?php
while($row = mysqli_fetch_array($query)){
	echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['firstname']."</td>";
	    echo "<td>".$row['lastname']."</td>";
	    echo "<td>".$row['email']."</td>";
	    echo "<td class='email'>".$row['buy']."</td>";
	echo "</tr>";

}

mysqli_close($conn);
?>
</table>
</div>