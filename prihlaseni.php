<!DOCTYPE html>
<html>
<head>
    <title>Přihlášení</title>
</head>
<body>
    <h1>Přihlášení</h1>
    <form method="post" action="skript_prihlaseni.php">
        <label for="username">Přihlašovací jméno:</label>
        <input type="text" id="username" name="login" required><br>

        <label for="password">Heslo:</label>
        <input type="password" id="password" name="heslo" required><br>

        <input type="submit" value="Přihlásit se">
    </form>
    <?php include 'menu.php'; menu(); ?>
</body>
</html>
