<!DOCTYPE html>
<html lang="cz">
<head>
    <title> Registrace </title>
    <link rel="stylesheet" href="../style/style.css">

</head>
<body>
<h2>Registrace</h2>
<form action="register.php" method="post">
    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name:
        <input type="text" name="username" placeholder="User Name" required>
    </label><br>
    <label>Password:
        <input type="password" name="password" placeholder="Password" required>
    </label><br>
    <button type="submit" name="register">Registrace</button>
</form>
</body>
</html>