<?php
include "rzecz.php";
if ($k == "k") {
    if (isset($_SESSION['id'])) {
    } else {
        header("Location: /index.php?Strona=Logowanie");
    }
    if (isset($_GET['ID']) || isset($_SESSION['zakupy'])) {
        if (isset($_GET['ID']) && ($_GET['ID'] != $_SESSION['poprzedni'])) {
            $array = array($_GET['ID']);
            array_push($_SESSION['zakupy'], $array);
            $_SESSION['poprzedni'] = $_GET['ID'];
        }

        $DB = mysqli_connect(
            $Database_Host,
            $Database_User,
            $Database_Pssss,
            $Database_name
        );
        foreach ($_SESSION['zakupy'] as $produkt) {
            $query = "SELECT `Tytul` , `Cena` , `Zdjecie` FROM produkty WHERE ID = '$produkt[0]'";
            $result = mysqli_query($DB, $query);
            while ($row = $result->fetch_assoc()) {
                echo "<div class='koszyk'
                ><a href='index.php?Strona=Produkty&&ID=" . $produkt[0] . "'>
                <img class='img-fluid' src='podstrony/zdjecia/produkty/" . $row["Zdjecie"] . "' /> "
                    . $row['Tytul'] . " "
                    . $row['Cena'] .
                    " zł</a></div>";
            }
        }
    } else {
        echo "Koszyk jest pusty";
    }
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
?>
<div>
    <form action="Handler.php?Rzecz=Zamówienie" class="formdiv form-rzeczy" method="POST">
        <input name="adres" class="form-control" type="text" placeholder="adres zamieszkania" required />
        <button type="submit" class="btn"> Zamów </button>
    </form>

</div>