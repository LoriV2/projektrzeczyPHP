<?php
include "rzecz.php";
if (($k == "k") && (isset($_GET['ID']))) {
	$DB = mysqli_connect(
		$Database_Host,
		$Database_User,
		$Database_Pssss,
		$Database_name
	);
	$query = "SELECT * FROM produkty WHERE ID = '$_GET[ID]'";
	$result = mysqli_query($DB, $query);
	while ($row = $result->fetch_assoc()) {
		echo $row['Tytul'];
		echo $row['Opis'];
		echo $row['Cena'];
	}
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
