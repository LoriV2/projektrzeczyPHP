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
		echo "
		<div class='container tło-produkt'>
			<div class='row'>
    			<div class='col'>
      				" . $row['Tytul'] . "
    			</div>
			</div>
  			<div class='row'>
    			<div class='col'>
				<img class='img-fluid' src='podstrony/zdjecia/produkty/" . $row['Zdjecie'] . "' />
    			</div>
				<div class='col'>
				" . $row['Cena'] . " zł <br>";
		if (isset($_SESSION['id'])) {
			echo "<a href='index.php?Strona=Koszyk&&ID=" . $_GET['ID'] . "'><button  class='btn'>Dodaj do koszyka</button></a>";
		} else {
			echo "<a href='index.php?Strona=Logowanie'><button  class='btn'>Zaloguj się</button></a>";
		}

		echo "<div class='col'>
				Opis produktu:  <br>
					" . $row['Opis'] . "
				</div>
				<br>
				<div>Tagi: <br>" . $row['Tagi'] . "</div>
				</div>
  			</div>
			<div class='row'>
				
				<div class='col'>
					
				</div>
			</div>
		</div>
		";
	}
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
