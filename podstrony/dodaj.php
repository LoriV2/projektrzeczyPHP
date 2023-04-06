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
	<form method="POST" action="Handler.php?Rzecz=Dodawanie">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Co sprzedajesz?</label>
			<input type="text" name="Nazwa" class="form-control" id="exampleFormControlInput1" placeholder="produkt" required>
		</div>
		<div class="mb-3">
			<label for="exampleFormControlTextarea1" class="form-label">Opisz swój produkt</label>
			<textarea class="form-control" name="Opis" id="exampleFormControlTextarea1" rows="3" required></textarea>
		</div>
		<div class="mb-3">
			<label class="form-label">Podaj cenę (w zł)</label>
			<input type="number" min="0" class="form-control" name="Cena" rows="3" required>
		</div>
		<button type="submit" class="btn">Dodaj produkt</button>
	</form>
</div>