<?php
if (isset($_SESSION["user"])) {
?>
    <div class="container">
        <header>
            <div class="header">
                <img class="icon2" src="img/jump.gif" />
                <h1>L'essentiel G2 -<span>Bonjour <?= $_SESSION["user"]["cv"] . " " . $_SESSION["user"]['prenom'] . " " . $_SESSION["user"]['nom']; ?></span></h1>
            </div>
        </header>
    </div>
<?php
} else {
?>
    <div class="container">
        <header>
            <div class="header">
                <img class="icon2" src="img/jump.gif" />
                <h1>L'essentiel G2 - <span>Veuillez vous connecter, merci </span></h1>
            </div>
        </header>
    </div>
<?php
}
?>