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
		echo '<tr>
				<td  class="card">
				<a href= "index.php?Strona=Produkty&&ID=' . $row['ID'] . '">
				<img class="img-fluid" src="podstrony/zdjecia/produkty/' . $row["Zdjecie"] . '" />
					<div class="niewidzialny">
					
					</div>
					<div class="card-body">
						<h5 class="card-title">' . $row['Tytul'] . '</h5>
						<p class="card-text"></p>
						' . $row['Cena'] . ' zł
					</div>
					</a>
				</td>
				<td class = "Nazwa niewidzialny">
				' . $row['Tytul'] . '
				</td>
				<td class = "Tagi niewidzialny">
				' . $row['Tagi'] . '
				</td>
				<td class = "Cena niewidzialny">
				' . $row['Cena'] . '
				</td>
				</tr>
				
				';
	}
}
?>

<table id="produkty">
	<thead class="container justify-content-center">
		<div class="search-container container justify-content-center">
			<input type="text" class="search form-control" placeholder="Czego szukasz?" />
		</div>
	</thead>
	<tbody class="list container-fluid">

		<?php
		echo produkty(
			$Database_Host,
			$Database_User,
			$Database_Pssss,
			$Database_name
		);
		?>

	</tbody>
</table>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
<script src="/js/js.js"></script>