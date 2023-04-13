<?php
include "rzecz.php";
if ($k == "k") {
    $DB = mysqli_connect(
        $Database_Host,
        $Database_User,
        $Database_Pssss,
        $Database_name
    );
    $querry = "SELECT * FROM wnioski";
    $result = mysqli_query($DB, $querry);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <p>
            <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Zgłoszenie nr: ' . $row['ID'] . '</a>
        </p>
        <form >
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                        Użytkownik: ' . $row['Uzytkownik'] . '<br>
                        Kilka słów o użytkowniku: ' . $row['Kilka_slow'] . '<br>
                        Czemu powinien dostać u nas pracę:' . $row['Czemu'] . '<br>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" action = "Handler.php?Rzecz=Wniosek&&P=1&&ID=' . $row['ID'] . '">✓</button>
            <button type="submit" action = "Handler.php?Rzecz=Wniosek&&P=0">✕</button>
        </form>
        ';
    }
}
