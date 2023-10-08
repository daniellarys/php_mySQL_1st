<?php
session_start();
echo "<h1>Odhlášení</h1>";
include 'menu.php'; 
menu(); 

$_SESSION["loginx"] = "";

echo "Byli jste úspěšně odhlášeni. ";
echo '<a href="prihlaseni.php">Přihlásit se znovu</a>';
?>
