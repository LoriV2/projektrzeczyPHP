<?php
include "rzecz.php";
if ($k == "k") {
    if (isset($_SESSION['produkty'])) {
        $DB = mysqli_connect(
            $Database_Host,
            $Database_User,
            $Database_Pssss,
            $Database_name
        );
        $query = "SELECT `Tytul` , `Cena`, `ID` FROM produkty WHERE ID = '$_SESSION[produkty]'";
        $result = mysqli_query($DB, $query);
    } else {
        echo "Koszyk jest pusty";
    }
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
