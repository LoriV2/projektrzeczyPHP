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
}
?>
<div class="tło container">
    <h1> Szczegóły twojego konta:</h1>
    <br>
    <?php
    echo "Nazwa użytkownika: " . $_SESSION['nazwa']
        . "<br>Data dołączenia: " . $_SESSION['data']
        . "<br>Rola: " . $_SESSION['user'];
    ?>
</div>
<div class="tło container">
    <h1>Twoje produkty</h1>
    <div class="row row-cols-3 row-cols-md-5 g-4">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<a href='index.php?Strona=Produkty&&ID=" . $row['ID'] . "'>" . $row['Tytul'] . "<br>" . $row['Cena'] . " zł</a><br><br>";
        }
        ?>
    </div>
</div>
<div class="tło container">
    <h1> Twoje zamówienia: </h1>
    <div class="row row-cols-2 row-cols-md-3 g-4">
        <?php
        $query = "SELECT * FROM zamowienia WHERE kogo = '$_SESSION[id]'";
        $result = mysqli_query($DB, $query);
        while ($row = $result->fetch_assoc()) {
            echo "<a href='/index.php?Strona=Zamówienie&&ID=" . $row['id'] . " '><p>Numer zamówienia: " . $row['id'] . " 
            <br>Kiedy zamówiono: " . $row['data'] . "
            <br> Status przesyłki: " . $row['status'] . "
            <br> Koszt zamówienia: " . $row['cena'] . " zł</p></a><br>";
        }
        ?>
    </div>
    <p>
        Łącznie do zapłaty:
        <?php
        $query = "SELECT SUM(cena) FROM zamowienia WHERE kogo = '$_SESSION[id]'";
        $result = mysqli_query($DB, $query);
        while ($row = $result->fetch_assoc()) {
            echo $row['SUM(cena)'] . " zł";
        }
        ?>
    </p>
</div>