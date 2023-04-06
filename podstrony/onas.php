<?php
include "rzecz.php";
if ($k == "k") {
    if (session_id() != NULL) {
    }
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
?>
onas