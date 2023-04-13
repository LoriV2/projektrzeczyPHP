<?php
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();


if (!empty($_POST)) {
	$Database_Host = 'localhost';
	$Database_User = 'root';
	$Database_Pssss = '';
	$Database_name = 'o_o';
	switch ($_GET['Rzecz']) {
		case "Wniosek":
			$DB = mysqli_connect(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);
			$stmt = mysqli_prepare($DB, "INSERT INTO wnioski (Uzytkownik,Kilka_slow,Czemu)
		VALUES ( ? , ?, ?)");
			$stmt->bind_param('iss', $_SESSION['id'], $_POST['Kilka'], $_POST['Czemu']);
			$stmt->execute();

			break;


		case "Zamówienie":
			$DB = mysqli_connect(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);
			foreach ($_SESSION['zakupy'] as $produkt) {
				$query = "SELECT Cena FROM produkty WHERE ID = '$produkt[0]'";
				$result = mysqli_query($DB, $query);
				while ($row = $result->fetch_assoc()) {
					$cena = $row['Cena'];
				}
				$query = "INSERT INTO `zamowienia` VALUES ('','$produkt[0]','$_POST[adres]' , '$cena' , curdate() , 1 , '$_SESSION[id]')";
				mysqli_query($DB, $query);
			}
			mysqli_close($DB);
			unset($_SESSION["zakupy"]);
			header("Location: index.php?Strona=TwojeKonto");
			break;

		case "Logowanie":
			$a = hash('sha256', $_POST['Login']);
			$b = hash('sha256', $_POST['Pswrd']);

			$query = "SELECT `Id` , `Rola` , `Nazwa` , `Data_dolaczenia` , `Profilowe` FROM `uzytkownicy` WHERE Login = '$a' && Haslo = '$b'";

			$DB = mysqli_connect(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);

			if (mysqli_num_rows(mysqli_query($DB, $query)) > 0) {
				//dostaje login
				$result = mysqli_query($DB, $query);
				$result = mysqli_fetch_assoc($result);
				$query = "INSERT INTO `sesje` VALUES ('', $result[Id] ,CURRENT_TIMESTAMP() , ADDTIME(CURRENT_TIMESTAMP(), ' 1:0:0.000'))";
				mysqli_query($DB, $query);
				mysqli_close($DB);
				//dostaje login

				$_SESSION['id'] = $result['Id'];
				$_SESSION['user'] = $result['Rola'];
				$_SESSION['nazwa'] = $result['Nazwa'];
				$_SESSION['data'] = $result['Data_dolaczenia'];
				$_SESSION['zakupy'] = array();
				$_SESSION['poprzedni'] = 0;

				session_regenerate_id(true);
				header("Location: index.php?Strona=TwojeKonto");
				session_write_close();
				exit;
			} else {
				header("Location: index.php?Strona=Logowanie&&Logowanie=2");
			}
			break;

		case "Rejestracja":
			date_default_timezone_set('UTC');
			$L = hash('sha256', $_POST['Login']);
			$Pass = hash('sha256', $_POST['Pswrd']);
			$DB = mysqli_connect(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);
			$query = "SELECT * FROM uzytkownicy WHERE Login = '$L'";
			if (mysqli_num_rows(mysqli_query($DB, $query)) > 0) {
				mysqli_close($DB);
				header("Location: index.php?Strona=Rejestracja&&Rejestracja=2");
			} else {

				$query = "INSERT INTO uzytkownicy(Id, Login , Haslo , Nazwa , Data_dolaczenia ,  Rola) VALUES ('', '$L' , '$Pass', '$_POST[Nazwa]' ,  curdate()  , 1)";
				mysqli_query($DB, $query);
				$query = "SELECT Id FROM uzytkownicy WHERE Login = '$L'";
				$result = mysqli_fetch_assoc(mysqli_query($DB, $query));
				mysqli_close($DB);
				header("Location: index.php?Strona=Rejestracja&&Rejestracja=1");
			}
			break;

		case "Dodawanie":
			$DB = mysqli_connect(
				$Database_Host,
				$Database_User,
				$Database_Pssss,
				$Database_name
			);
			if (is_uploaded_file($_FILES['zdjecie']['tmp_name'])) {

				$imagename = $_FILES['zdjecie']['name'];

				$imagetype = $_FILES['zdjecie']['type'];

				$imageerror = $_FILES['zdjecie']['error'];

				$imagetemp = $_FILES['zdjecie']['tmp_name'];

				$prod = "";


				$imagePath = "podstrony/zdjecia/produkty/";

				$extension = end(explode(".", $imagename));

				$query = "SELECT ID FROM produkty ORDER BY ID DESC LIMIT 1";

				$result = mysqli_query($DB, $query);

				while ($row = $result->fetch_assoc()) {
					$prod = $row['ID'];
				}
				$newfilename = $prod . "." . $extension;

				$imagename = $newfilename;

				$query = "INSERT INTO produkty(ID , Kogo_produkt , Opis , Tytul , Data_dodania , Cena , Zdjecie , Tagi) VALUES ('', '$_SESSION[id]' , '$_POST[Opis]' , '$_POST[Nazwa]' , curdate() , '$_POST[Cena]' , '$newfilename' , '$_POST[Tagi]')";

				mysqli_query($DB, $query);

				mysqli_close($DB);
				header("Location: index.php?Strona=TwojeKonto");
				if (is_uploaded_file($imagetemp)) {
					if (move_uploaded_file($imagetemp, $imagePath . $imagename)) {
						echo "Sussecfully uploaded your image.";
					}
				}
			}

			break;
	}
} else {
	header("Location: index.php");
}
