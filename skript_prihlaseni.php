<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login"];
    $password = $_POST["heslo"];

    include "DBlogin.php";
    $conn = new mysqli("$server", "$loginuser", "$pass", "$database");

    if ($conn->connect_error) {
        die("Připojení k databázi selhalo: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    $query = "SELECT * FROM uzivatele WHERE login='$username'";
    $result = $conn->query($query);


        $row = $result->fetch_assoc();
        if (password_verify($password, $row["heslo"])) {
            $_SESSION["loginx"] = $username;
            echo "Vítej! $username !!!!";
            header("Location: pro_registrovane.php"); // Redirect

        } else {            
            echo "Chybné přihlašovací údaje pro účet $username";            
        }

    $conn->close();
}
?>
