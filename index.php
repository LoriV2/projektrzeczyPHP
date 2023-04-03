<!DOCTYPE html>
<?php
if (isset($_GET['Strona'])) {
} else {
	$_GET['Strona'] = "StronaGłówna";
}


?>
<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/styl.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
		echo $_GET['Strona'];
		?>
	</title>
</head>
<header>
	<nav class="navbar navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php?Strona=StronaGłówna">O_O</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">|||</span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.php?Strona=StronaGłówna">Strona główna</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?Strona=Produkty">Produkty</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Konto
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<?php
							if (isset($_SESSION['user'])) {
								echo	'<li><a class="dropdown-item" href="index.php?Strona=TwojeKonto">Twoje Konto</a></li>
										<li><a class="dropdown-item" href="#">Wyloguj</a></li>';
							} else {
								echo	'<li><a class="dropdown-item" href="#">Rejestracja</a></li>
										<li><a class="dropdown-item" href="index.php?Strona=Logowanie">Logowanie</a></li>';
							}
							?>

						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?Strona=Onas">O nas</a>
					</li>
					<?php
					if (isset($_SESSION['user'])) {
						if ($_SESSION['user'] == "Pracownik") {
							echo '<li class="nav-item">
								<a class="nav-link" href="index.php?Strona=Zamówienia&&id=' . $_SESSION['userid'] . '">Zamówienia</a>
								</li>';
						}
					}
					?>

				</ul>
			</div>
		</div>
	</nav>
</header>

<body style="padding-bottom:10000px">
	<?php
	function wyswietl($LINK)
	{
		switch ($LINK) {
			case "StronaGłówna":
				include "podstrony/StronaGłówna.php";
				break;
			case "Logowanie":
				include "podstrony/Logowanie.php";
				break;
			case "Produkty":
				include "podstrony/Produkty.php";
				break;
			case "Zamówienia":
				if (isset($_SESSION['user'])) {
					if ($_SESSION['user'] == "pracownik") {
						include "podstrony/Produkty.php";
						break;
					}
				}
				echo "Nie masz dostępu do tej strony!";
				break;
			case "":
				include "podstrony/StronaGłówna.php";
				break;
			case "TwojeKonto":
				include "podstrony/Twoje.php";
				break;

			default:
				echo "Przepraszamy ale strona o nazwie: " . $LINK . " nie istnieje";
				break;
		}
	}

	echo wyswietl($_GET['Strona']);

	?>
</body>

</html>