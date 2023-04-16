<?php
include "rzecz.php";
if ($k == "k") {
	if (isset($_SESSION['id'])) {
	} else {
		header("Location: /index.php?Strona=Logowanie");
	}
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
?>

<div class="container formdiv">
	<form class="form-rzeczy" method="POST" action="Handler.php?Rzecz=Dodawanie" enctype="multipart/form-data">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Co sprzedajesz?</label>
			<input type="text" name="Nazwa" class="form-control" id="exampleFormControlInput1" placeholder="produkt" required maxlength="255">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Opisz swój produkt</label>
			<textarea class="form-control" name="Opis" id="exampleFormControlTextarea1" rows="3" required maxlength="255"></textarea>
		</div>
		<div class="mb-3">
			<label for="formFile" class="form-label">Zdjęcie twojego produktu</label>
			<input class="form-control" type="file" name="zdjecie" id="formFile">
		</div>
		<div class="mb-3">
			<label class="form-label">Podaj cenę (w zł)</label>
			<input type="number" min="0" step="0.01" class="form-control" name="Cena" rows="3" required maxlength="255">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlTextarea" class="form-label">Tagi (pisz po przecinku)</label>
			<textarea placeholder="Nowy , Rzeczny , Niebezpieczny" class="form-control" name="Tagi" id="exampleFormControlTextarea" rows="3" required maxlength="255"></textarea>
		</div>
		<button type="submit" class="btn">Dodaj produkt</button><br>
		<?php
		if (isset($_GET['Przes'])) {
			echo $_GET['Przes'];
		}
		?>
	</form>
</div>