<!DOCTYPE html>
<html>
<head>
    <title>Registrace</title>
</head>
<body>
    <h1>Registrace</h1>
    <form method="post" action="skript_registrace.php">
        <label for="first_name">Křestní jméno:</label>
        <input type="text" id="first_name" name="jmeno" required><br>

        <label for="last_name">Příjmení:</label>
        <input type="text" id="last_name" name="prijmeni" required><br>

        <label for="username">Přihlašovací jméno:</label>
        <input type="text" id="username" name="login" required><br>

        <label for="password">Heslo:</label>
        <input type="password" id="password" name="heslo" required><br>

        <label for="confirm_password">Ověření hesla:</label>
        <input type="password" id="confirm_password" name="overeni_hesla" required><br>

        <input type="submit" value="Zaregistrovat">
    </form>
    <?php include 'menu.php'; menu(); ?>
</body>
</html>
