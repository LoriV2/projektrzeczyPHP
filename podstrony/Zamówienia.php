<?php
include "rzecz.php";
if ($k == "k") {
    $DB = mysqli_connect(
        $Database_Host,
        $Database_User,
        $Database_Pssss,
        $Database_name
    );
    $query = "SELECT * FROM zamowienia";

    $result = mysqli_query($DB, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class = "">
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#' . $row['id'] . 'a" aria-expanded="false" aria-controls="' . $row['id'] . 'a">Toggle second element</button>
            </p>
            <div class = "formdiv">
                        <div class="collapse multi-collapse" id="' . $row['id'] . 'a">
                            <div class="card card-body">
                            <p>Data złożenia zamówienia: ' . $row['data'] . '</p>
                            <a href = "index.php?Strona=Zgłoszenia&&D=' . $row['id'] . '"> <button class="btn" style = "width:100%">✓</button></a><br>
                           
                            </div>
                        </div>    
            </div>
        </div>';
    }
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
?>
Zamówienia