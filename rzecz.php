<?php
if (isset($_GET['Strona'])) {
    global $k;
} else {
    header("Location: index.php?Strona=StronaGłówna");
}
