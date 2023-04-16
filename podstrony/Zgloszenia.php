<?php
include "rzecz.php";
if (($k == "k") && ($_SESSION['user'] == 'administrator')) {
    $DB = mysqli_connect(
        $Database_Host,
        $Database_User,
        $Database_Pssss,
        $Database_name
    );
    if (isset($_GET['P'])) {
        $query = "DELETE FROM wnioski WHERE Uzytkownik = '$_GET[P]'";
        mysqli_query($DB, $query);
    }
    if (isset($_GET['D'])) {
        $query = "UPDATE uzytkownicy SET Rola = 3  WHERE Id = '$_GET[D]' ";
        mysqli_query($DB, $query);
        $query = "DELETE FROM wnioski WHERE Uzytkownik = '$_GET[D]'";
        mysqli_query($DB, $query);
    }
    $querry = "SELECT * FROM wnioski";
    $result = mysqli_query($DB, $querry);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class = "">
            <p>
                <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Zgłoszenie nr: ' . $row['ID'] . '</a>
            </p>
            <div class = "formdiv">
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                            Użytkownik: ' . $row['Uzytkownik'] . '<br>
                            Kilka słów o użytkowniku: ' . $row['Kilka_slow'] . '<br>
                            Czemu powinien dostać u nas pracę:' . $row['Czemu'] . '<br><br>
                            <a href = "index.php?Strona=Zgłoszenia&&D=' . $row['Uzytkownik'] . '"> <button class="btn" style = "width:100%">✓</button></a><br>
                            <a href = "index.php?Strona=Zgłoszenia&&P=' . $row['Uzytkownik'] . '"><button class="btn" style = "width:100%">✕</button></a>
                            </div>
                        </div>
                    </div>

                </div>    
            </div>
        </div>';
    }
    mysqli_close($DB);
} else {
    header("Location: /index.php?Strona=Logowanie");
}
