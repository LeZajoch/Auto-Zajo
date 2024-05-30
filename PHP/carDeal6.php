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

<div class="container my-5">
    <div class="row">
        <div class="car-info col-md-8 bg-dark text-warning">
            <h1 class="bg-dark">Audi A3 1.4 TFSi Ambition Sportback</h1>
            <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.autoesa.cz/files/cars/738283770/950_713_e/738283770-2.jpg?1711647047" class="d-block w-100" alt="Car Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.autoesa.cz/files/cars/738283770/950_713_e/738283770-3.jpg?1711647047" class="d-block w-100" alt="Car Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.autoesa.cz/files/cars/738283770/950_713_e/738283770-5.jpg?1711647047" class="d-block w-100" alt="Car Image 3">
                    </div>
                </div>
                <div class="deal fw-bold text-uppercase text-center">
                    AKČNÍ NABÍDKA
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="car-info mt-3" style="background-color: #272b30 !important;">
                <h2 class="text-warning">Popis Vozu</h2>
                <table class="table table-1">
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Výrobce</th>
                        <td class="text-white" style="background-color: #353940 !important;">Audi</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Model</th>
                        <td class="text-white" style="background-color: #353940 !important;">A3</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Ročník</th>
                        <td class="text-white" style="background-color: #353940 !important;">2013</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Stav tachometru</th>
                        <td class="text-white" style="background-color: #353940 !important;">142 142 km</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Palivo</th>
                        <td class="text-white" style="background-color: #353940 !important;">benzín</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Zdvihový objem</th>
                        <td class="text-white" style="background-color: #353940 !important;">1,398 ccm</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Výkon</th>
                        <td class="text-white" style="background-color: #353940 !important;">90 kW (150 PS)</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Barva</th>
                        <td class="text-white" style="background-color: #353940 !important;">modrá</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">VIN</th>
                        <td class="text-white" style="background-color: #353940 !important;">WVZZZ3CZLE0*****</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Emisní norma</th>
                        <td class="text-white" style="background-color: #353940 !important;">EURO VI</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Hmotnost</th>
                        <td class="text-white" style="background-color: #353940 !important;">2,050 kg</td>
                    </tr>
                </table>
                <h3 class="text-warning">Rozměry</h3>
                <table class="table table-2">
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Délka vozu</th>
                        <td class="text-white" style="background-color: #353940 !important;">4,889 mm</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Šířka vozu</th>
                        <td class="text-white" style="background-color: #353940 !important;">1,832 mm</td>
                    </tr>
                    <tr>
                        <th class="text-warning" style="background-color: #2f3339 !important;">Výška vozu</th>
                        <td class="text-white" style="background-color: #353940 !important;">1,516 mm</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-md-4">


            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-box bg-dark">
                            <h2 class="text-warning">AKČNÍ CENA</h2>
                            <p class="price">163 999 Kč</p>
                            <p class="price-note">Cena platí u při operativním leasingu.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pricing-box bg-dark">
                            <h2 class="text-warning">CENA V HOTOVOSTI</h2>
                            <p class="price">203 999 Kč</p>
                            <p class="price-note">Cena bez DPH činí 161 159 Kč</p>
                        </div>
                    </div>
                </div>
            </div>
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