<?php
if (isset($_GET['Strona'])) {
    global $k;
    global $Database_Host;
    global $Database_User;
    global $Database_Pssss;
    global $Database_name;
    $Database_Host = 'localhost';
    $Database_User = 'root';
    $Database_Pssss = '';
    $Database_name = 'o_o';
} else {
    header("Location: index.php?Strona=StronaGłówna");
}
