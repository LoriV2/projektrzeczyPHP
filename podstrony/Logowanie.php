<?php
include "rzecz.php";
if ($k == "k") {
} else {
    header("Location: /index.php?Strona=StronaGłówna");
}
if (isset($_GET['Logout'])) {
    session_destroy();
}

?>
<div class="formdiv container justify-content-center">
    <form class="form-rzeczy justify-content-center" method="POST" action="Handler.php?Rzecz=Logowanie">
        <div class="mb-3">
            <label name="Logowanie" class="form-label">Login</label>
            <input type="text" name="Login" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hasło</label>
            <input type="password" name="Pswrd" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn">Zaloguj</button>
        <div class="ostatni mb-3">
            <label for="exampleInputPassword1" class="form-label">Nie masz jeszcze konta?</label>
            <br>
            <a class="btn" href="index.php?Strona=Rejestracja">Zarejestruj się</a>
            <br>
            <br>
            <?php
            if (isset($_GET['Logowanie'])) {
                if ($_GET['Logowanie'] == 1) {
                    echo "Pomyślnie zalogowano";
                } else {
                    echo "Zła nazwa użytkownika bądź hasło";
                }
            }
            ?>
        </div>
    </form>
</div>