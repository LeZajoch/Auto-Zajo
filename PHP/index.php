<!DOCTYPE html>
<html lang="cz">
<head>
    <title> Přihlášení </title>
</head>
<body>
<form action="login.php" method="post">
    <h2>Přihlášení</h2>
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label> User Name
        <input type="text" name="username" placeholder="User Name" >
    </label><br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Login</button>
</form>
</body>
</html>