<?php
include "rzecz.php";
if ($k == "k") {
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
?>
<div class="tło container">
    <h1> Szczegóły twojego konta:</h1>
    <br>
    <?php
    echo "Nazwa użytkownika: " . $_SESSION['nazwa'];
    echo "<br>Data dołączenia: " . $_SESSION['data'];
    echo "<br>Rola: ".$_SESSION['user'];
    ?>
</div>