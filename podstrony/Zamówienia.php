<?php
include "rzecz.php";
if (($k == "k") && ($_SESSION['user'] == 'pracownik')) {
    $DB = mysqli_connect(
        $Database_Host,
        $Database_User,
        $Database_Pssss,
        $Database_name
    );
    if (isset($_GET['C'])) {
        $query = "SELECT status+0 FROM `zamowienia` WHERE id = '$_GET[C]'";
        $result = mysqli_query($DB, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['status+0'] < 3) {
                $query = "UPDATE zamowienia SET Status = Status+1  WHERE id = '$_GET[C]' ";
                mysqli_query($DB, $query);
            }
        }
        $query = "DELETE FROM wnioski WHERE Uzytkownik = '$_GET[C]'";
        mysqli_query($DB, $query);
    }
    $query = "SELECT * FROM zamowienia";

    $result = mysqli_query($DB, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['status'] != "dostarczono") {
            echo '
        <div class = "">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#aa' . $row['id'] . 'a" aria-expanded="false" aria-controls="aa' . $row['id'] . 'a">Zamówienie nr: ' . $row['id'] . '</button>
            </p>
            <div class = "formdiv">
                        <div class="collapse multi-collapse" id="aa' . $row['id'] . 'a">
                            <div class="card card-body">
                            <p>Data złożenia zamówienia: ' . $row['data'] . '</p>
                            <a href="index.php?Strona=Produkty&&ID=' . $row['produkt'] . '">Nr produktu: ' . $row['produkt'] . '</a>
                            <p>Status zamówienia: ' . $row['status'] . '</p>
                            <a href="https://www.google.com/maps/place/' . $row['adres'] . '">Adres docelowy zamówienia: ' . $row['adres'] . '</a>
                            <a href = "index.php?Strona=Zamówienia&&C=' . $row['id'] . '"> <button class="btn" style = "width:100%">✓</button></a><br>
                           
                            </div>
                        </div>    
            </div>
        </div>';
        }
    }
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
?>
Zamówienia