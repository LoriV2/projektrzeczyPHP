<?php
include "rzecz.php";
if ($k == "k") {
	
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
function  produkty(
	$Database_Host,
	$Database_User,
	$Database_Pssss,
	$Database_name
) {
	$DB = mysqli_connect(
		$Database_Host,
		$Database_User,
		$Database_Pssss,
		$Database_name
	);
	$query = "SELECT `Tytul` , `Opis`, `Cena`, `ID` , `Zdjecie` , `Tagi` FROM produkty";
	$result = mysqli_query($DB, $query);
	while ($row = $result->fetch_assoc()) {
		echo '
				<td  class="card Nazwa">
				<a href= "index.php?Strona=Produkty&&ID=' . $row['ID'] . '">
				<img class="img-fluid" src="podstrony/zdjecia/produkty/' . $row["Zdjecie"] . '" />
					<div class="niewidzialny">
					
					</div>
					<div class="card-body">
						<h5 class="card-title Nazwa">' . $row['Tytul'] . '</h5>
						<p class="card-text"></p>
						' . $row['Cena'] . ' zł
					</div>
					</a>
				</td>
				
				';
	}
}
?>

<table>
	<tbody class="list container-fluid">
		<tr>
			<?php
			echo produkty(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);
			?>
		</tr>
	</tbody>
</table>