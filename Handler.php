<?php
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();

if (!empty($_POST)) {
    switch ($_GET['Rzecz']) {
        case "Logowanie":
            $a = hash('sha256', $_POST['Login']);
            $b = hash('sha256', $_POST['Pswrd']);

            $query = "SELECT `Id` , `Rola` , `Nazwa` , `Data_dolaczenia` , `Profilowe` FROM `uzytkownicy` WHERE Login = '$a' && Haslo = '$b'";

            $DB = mysqli_connect(
                'localhost',
                'root',
                '',
                'o_o'
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
                'localhost',
                'root',
                '',
                'o_o'
            );
            $query = "SELECT * FROM uzytkownicy WHERE Login = '$L'";
            if (mysqli_num_rows(mysqli_query($DB, $query)) > 0) {
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

        case "Produkt":

            break;
        case "Dodawanie":

            break;
    }
} else {
    header("Location: index.php");
}
