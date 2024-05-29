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
<body class="car1">
<!--navbar -->
<?php
include 'navbar.php';
?>
<!--main content-->

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.autoesa.cz/files/cars/335304428/950_713_e/335304428-2.jpg?1717003316" class="d-block w-100" alt="Car 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.autoesa.cz/files/cars/335304428/950_713_e/335304428-3.jpg?1717003316" class="d-block w-100" alt="Car 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.autoesa.cz/files/cars/335304428/950_713_e/335304428-4.jpg?1717003316" class="d-block w-100" alt="Car 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-8">
            <h1>Car Name</h1>
            <p>Car Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada faucibus ex nec ultricies. Donec mattis egestas nisi non pretium.</p>
        </div>
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