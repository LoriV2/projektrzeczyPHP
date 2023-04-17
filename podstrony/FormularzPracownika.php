<?php
include "rzecz.php";
if ($k == "k") {
    if (isset($_SESSION['id'])) {
    } else {
        header("Location: /index.php?Strona=Logowanie");
    }
}else{
    header("Location: /index.php?Strona=Logowanie");
}
?>
<div class="formdiv container justify-content-center">
    <form class="form-rzeczy justify-content-center" method="POST" action="Handler.php?Rzecz=Wniosek">
        <div class=" mb-3">
            <label name="aa" class="form-label">Napisz kilka słów o sobie</label>
            <textarea class="form-control" name="Kilka" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Napisz czemu powinieneś być przyjęty jako nasz pracownik</label>
            <textarea class="form-control" name="Czemu" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn">Wyślij zgłoszenie</button>
        <br>
        <?php
        if (isset($_GET['D'])) {
            echo $_GET['D'];
        }
        ?>
    </form>

</div>