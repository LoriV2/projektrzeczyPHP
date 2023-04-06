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
	$query = "SELECT `Tytul` , `Opis`, `Cena`, `ID` FROM produkty";
	$result = mysqli_query($DB, $query);
	while ($row = $result->fetch_assoc()) {
		echo '<a href= "index.php?Strona=Produkty&&ID='.$row['ID'].'">
			<div class="col">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">' . $row['Tytul'] . '</h5>
						<p class="card-text">' . $row['Opis'] . '</p>
						'.$row['Cena'].' zł
					</div>
				</div>
				</div>
				</a>';
	}
}
?>

<div>
	<div class="row row-cols-3 row-cols-md-5 g-4">
		<?php
		echo produkty(
			$Database_Host,
			$Database_User,
			$Database_Pssss,
			$Database_name
		);
		?>
	</div>
</div>