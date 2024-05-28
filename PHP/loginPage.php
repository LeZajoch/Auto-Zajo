<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <title>Auto Zajo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.ico"/>
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="loginPage">
<!--navbar -->
<?php
include 'navbar.php';
?>

<!--main content-->
<div class="container">
    <div class="form-container bg-dark text-warning">
        <h2 class="text-center text-warning">Přihlášení</h2>
        <form action="login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="User Name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-warning" name="login" >Přihlášení</button>
                <button type="button" class="btn" style="background-color: #fffa9d !important;" name="register" onclick="window.location.href='../php/registerPage.php'">Registrace</button>
            </div>
        </form>
    </div>
</div>


<!--footer-->
<?php
include 'footer.php';
?>

<!--import-->
<script src="https://kit.fontawesome.com/8ff1d709ed.js" crossorigin="anonymous"></script>
<script src="../scripts/scipt.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
