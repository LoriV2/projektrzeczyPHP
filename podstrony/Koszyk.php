<?php
include "rzecz.php";
if ($k == "k") {
    if (isset($_SESSION['id'])) {
    } else {
        header("Location: /index.php?Strona=Logowanie");
    }
    if (isset($_GET['Usun'])) {
        $temp = array();
        foreach ($_SESSION['zakupy'] as $produkt) {
            if (intval($_GET['Usun']) == $produkt[0]) {
            } else {
                array_push($temp, $produkt);
            }
            $_SESSION['zakupy'] = array();
            $_SESSION['poprzedni'] = NULL;
            $_SESSION['zakupy'] = $temp;
        }
    }
    if (isset($_GET['ID']) || isset($_SESSION['zakupy'])) {
        if (isset($_GET['ID']) && ($_GET['ID'] != $_SESSION['poprzedni'])) {
            $array = array(intval($_GET['ID']));
            array_push($_SESSION['zakupy'], $array);
            $_SESSION['poprzedni'] = $_GET['ID'];
        }

        $DB = mysqli_connect(
            $Database_Host,
            $Database_User,
            $Database_Pssss,
            $Database_name
        );
        echo "<div class='container formdiv tło'>";
        foreach ($_SESSION['zakupy'] as $produkt) {
            $query = "SELECT `Tytul` , `Cena` , `Zdjecie` FROM produkty WHERE ID = '$produkt[0]'";
            $result = mysqli_query($DB, $query);
            while ($row = $result->fetch_assoc()) {
                echo "<div class='koszyk'><a href='index.php?Strona=Produkty&&ID=" . $produkt[0] . "'>
                        <img class='img-fluid' src='podstrony/zdjecia/produkty/" . $row["Zdjecie"] . "' /> "
                    . $row['Tytul'] . " "
                    . $row['Cena'] .
                    " zł</a>
                    <a href=index.php?Strona=Koszyk&&Usun=" . $produkt[0] . "><button class= 'btn'>X</button></a>
                    </div>";
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
    <form action="/Handler.php?Rzecz=Zamówienie" class="formdiv form-rzeczy" method="POST">
        <input name="adres" class="form-control" type="text" placeholder="adres i miasto" required />
        <button type="submit" class="btn"> Zamów </button>
    </form>
</div>
</div>