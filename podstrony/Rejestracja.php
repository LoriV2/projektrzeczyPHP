<?php
include "rzecz.php";
if ($k == "k") {
} else {
	header("Location: /index.php?Strona=StronaGłówna");
}
?>
<div class="formdiv container">
	<form class="form-rzeczy justify-content-center" method="POST" action="Handler.php?Rzecz=Rejestracja">
		<div class="mb-3">
			<label name="Logowanie" class="form-label">Login</label>
			<input type="text" name="Login" class="form-control" required>
		</div>
		<div class="mb-3">
			<label name="Logowanie" class="form-label">Nazwa użytkownika</label>
			<input type="text" name="Nazwa" class="form-control" required>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Hasło</label>
			<input type="password" name="Pswrd" class="form-control" id="exampleInputPassword1" required>
		</div>
		<button type="submit" class="btn">Zarejestruj</button>
		<div class="ostatni mb-3">
			<label class="form-label">Masz już konto?</label>
			<br>
			<a class="btn" href="index.php?Strona=Logowanie">Zaloguj się</a>

			<?php
			if (isset($_GET['Rejestracja'])) {
				switch ($_GET['Rejestracja']) {
					case 1:
						echo "<br><br><p class='highlight'>Pomyślnie zarejestrowano</p>";
						break;
					case 2:
						echo "<br><br><p class='highlight'>Login jest już zajęty!</p>";
						break;
				}
			}
			?>
		</div>
	</form>
</div>