<?php
session_start();

include 'menu.php';
menu();
echo "<h1>Pro registrované</h1>";

if (empty($_SESSION["loginx"])) {
    echo '<p>Pro zobrazení obsahu této stránky se prosím přihlaste.</p>';
    echo '<a href="prihlaseni.php">Přihlásit se</a>';
    die(); 
}


echo '<p>Zde je obsah <strong>pouze</strong> pro přihlášené uživatele.</p>';
echo '<img src="https://gct.law/Att/1692?size=m" alt="W3Schools.com">';
?>
