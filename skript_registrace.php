<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = $_POST["jmeno"];
    $prijmeni = $_POST["prijmeni"];
    $login = $_POST["login"];
    $heslo = $_POST["heslo"];
    $overeni_hesla = $_POST["overeni_hesla"];

    if ($heslo != $overeni_hesla) {
        echo"<h1>Hesla se neshodují</h1>";
        echo "Ověření hesla nesouhlasí.<br> Zkuste to znovu.<br>";
        echo '<a href="registrace.php">Zkusit znovu</a><br>'; 
        echo "Nyní dávej <strong>většíce</strong> pozor, zda se heslo shoduje!";
        exit;
    }

    include "DBlogin.php";
    $conn = new mysqli($server, $loginuser, $pass, $database);

    if ($conn->connect_error) {
        die("Připojení k databázi selhalo: " . $conn->connect_error);
    }

    $jmeno = $conn->real_escape_string($jmeno);
    $prijmeni = $conn->real_escape_string($prijmeni);
    $login = $conn->real_escape_string($login);
    $heslo = $conn->real_escape_string($heslo);

    // Did user exist?
    $existingUserQuery = "SELECT * FROM uzivatele WHERE login = '$login'";
    $existingUserResult = $conn->query($existingUserQuery);

    if ($existingUserResult->num_rows > 0) {
        echo"<h1>Užívatel již existuje!</h1>";
        echo "Uživatel s tímto loginem již existuje!<br>";
        echo '<a href="registrace.php">Zkusit znovu</a><br>';        
        echo "Zvol si tentokrát <strong>jinou </strong>přezdívku!";
        $conn->close();
        exit;
    }

    $hashed_heslo = password_hash($heslo, PASSWORD_DEFAULT);

    $query = "INSERT INTO uzivatele (jmeno, prijmeni, login, heslo) VALUES ('$jmeno', '$prijmeni', '$login', '$hashed_heslo')";
    
if ($conn->query($query) === TRUE) {        
        $_SESSION["loginx"] = $conn->insert_id;
        echo "<h1>Úspěšná registrace!</h1>";
        echo "Registrace úspěšná. Nyní jste již přihlášen.<br>";
        echo '<a href="pro_registrovane.php">obsah pro přihlášené</a>';
    } else {
        echo "Chyba při registraci: " . $conn->error;
    }

    $conn->close();
}
?>
