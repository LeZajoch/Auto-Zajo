<!DOCTYPE html>
<html lang="cz">
<head>
    <title> Přihlášení </title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<h2>Přihlášení</h2>
<form action="login.php" method="post">
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name:
        <input type="text" name="username" placeholder="User Name" required>
    </label><br>
    <label>Password:
        <input type="password" name="password" placeholder="Password" required>
    </label><br>
    <button type="submit" name="login">Přihlášení</button>
    <button type="button" name="register" onclick="window.location.href='../php/registerPage.php'">Registrace</button>
</form>

</body>
</html>