<?php
include "rzecz.php";
if (($k == "k") && (isset($_GET['ID']))) {
	$DB = mysqli_connect(
		$Database_Host,
		$Database_User,
		$Database_Pssss,
		$Database_name
	);
	$querry = "SELECT * FROM zamowienia WHERE id= '$_GET[ID]'";
	$result = mysqli_query($DB, $querry);
	while ($row = $result->fetch_assoc()) {
		echo '
		<div class="container tło">
		<div class="row">
		  <div class="col">
			<h1>Zamówienie nr: ' . $row['id'] . '</h1>
		  </div>
		  <div class="col">
			</div>
		</div>
		<div class="row">
		  <div class="col">
			Status przesyłki: ' . $row['status'] . '<br>
			Cena przesyłki: ' . $row['cena'] . ' zł<br>
			Adres: ' . $row['adres'] . ' <br>
		  </div>
		  <div class="col">
		  <a href="/index.php?Strona=Produkty&&ID=' . $row['produkt'] . '"> Produkt: nr ' . $row['produkt'] . '</a>
		  </div>
		  <div class="col">
			
		  </div>
		</div>
	  </div>
        ';
	}
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
?>

<div>

</div>