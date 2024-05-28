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
<body>
<!--navbar -->
<?php
include 'navbar.php';
?>

<!--main content-->


<!--reasons why-->
<div class="container-fluid bg-dark text-warning py-4">
    <h1 class="text-center mb-4">Proč právě AUTO ZAJO?</h1>
    <div class="row text-center">
        <div class="col-md">
            <img src="../img/png icons/icon-vyber.png" alt="Výběr vozů" class="mb-2">
            <p>Největší výběr vozů na jedné ploše</p>
        </div>
        <div class="col-md">
            <img src="../img/png icons/icon-km.png" alt="Najeté kilometry" class="mb-2">
            <p>Garance najetých kilometrů</p>
        </div>
        <div class="col-md">
            <img src="../img/png icons/icon-stav.png" alt="Technický stav" class="mb-2">
            <p>Prověřen technický stav vozů</p>
        </div>
        <div class="col-md">
            <img src="../img/png icons/icon-puvod.png" alt="Původ vozidel" class="mb-2">
            <p>Garance původu vozidel</p>
        </div>
        <div class="col-md">
            <img src="../img/png icons/icon-zaruka.png" alt="Záruka" class="mb-2">
            <p>Prodloužená záruka vozů na 3 roky</p>
        </div>
    </div>
</div>

<!--reviews-->
<div class="container-fluid py-4" style="background-color: #fffbc2 !important;">
    <div class="container my-5">
        <div class="text-center mb-5">
            <h2 class="text-warning">Hodnocení zákazníků</h2>
            <h6>Není pro nás nic důležitějšího než spokojení zákazníci</h6>
        </div>
        <div class="row">
            <div id="carouselReviews" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="review-card-text">
                                        <p>Velký výběr vozů, ceny jakž takž příjemné prostředí, ochota poradit.</p>
                                    </div>
                                    <div class="review-footer">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <div class="customer-name">Jiří Vala</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="review-card-text">
                                        <p>Pěkné prostory výkupního centra, sympatičtí zaměstnanci, dali mi férovou cenu za auto a ještě mě odvezli zpátky do Prahy. Všechno běželo dobře, i když vše bylo trošku zdlouhavé.</p>
                                    </div>
                                    <div class="review-footer">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="customer-name">Ronald Schubert</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="review-card-text">
                                        <p>Auto Zajo mohu vřele doporučit. Od příjezdu přes zkušební jízdu a vyřízení všech formalit, profesionální přístup s lidskou tváří. Max spokojenost.</p>
                                    </div>
                                    <div class="review-footer">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="customer-name">Ondřej Jedlička</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="review-card">
                                    <div class="review-card-text">
                                        <p>Spokojenost. Velky vyber vozu, vlastni servis, STK, benzinka. Auto si privezete domu a nic neresite. Domu Vam pak prijdou vsechny dokumenty.</p>
                                    </div>
                                    <div class="review-footer">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="customer-name">Peter Buk</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more carousel items as needed -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviews" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselReviews" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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

