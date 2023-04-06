<?php
include "rzecz.php";
if ($k == "k") {
    $DB = mysqli_connect(
        $Database_Host,
        $Database_User,
        $Database_Pssss,
        $Database_name
    );
    $query = "SELECT `Tytul` , `Cena`, `ID` FROM produkty WHERE Kogo_produkt = '$_SESSION[id]'";
    $result = mysqli_query($DB, $query);
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}?>
