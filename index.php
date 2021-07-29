<?php $page=1; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./css/all.min.css">
    <title>Covid-19</title>
</head>

<body>

    <!-- *************************** Nav Bar ****************************** -->
    <?php  include"./partials/nav.php";  ?>


    <!-- ***************************** Carosuel ************************** -->
    <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="./images/slider22.jpg" class=" img-fluid bd-placeholder-img" alt="">
                <div class="container">
                    <div class="carousel-caption text-end text-dark">
                        <h1>Get Vaccinated</h1>
                        <p>Get vaccinated as soon as possible from the nearby Vaccine center.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="./images/slider21.jpg" class="img-fluid bd-placeholder-img" alt="">
                <div class="container">
                    <div class="carousel-caption text-start ">
                        <h1>Keep the safe distance</h1>
                        <p>Keep the safe social distance from the other person.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/slider23.jpg" class="img-fluid bd-placeholder-img" alt="">
                <div class="container">
                    <div class="carousel-caption text-end text-dark">
                        <h1>Corona Virus</h1>
                        <p>Stay quarantine if you are affected with the virus.</p>
                        <p> Don't move outside.</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- **************************** Live Update ******************************* -->
    <?php include"./live.php"; ?>


    <!-- ******************************* Symptoms ***************************** -->
    <?php include"./symptoms.php"; ?>


    <!-- ******************************* About ******************************** -->
    <div class="container-fluid" style="background-color:#E5E8E8;" id="about">
        <h1 class="py-4 text-center mb-2 fw-bold">About The Disease</h1>
        <div class="row mt-3">
            <div class="col-lg-5 col-md-5 col-12 pb-5 ">
                <div class="justify-content-center d-flex">
                    <img src="./images/about2.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="  mb-3">CORONAVIRUS (COVID-19)</h2>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste velit ad, quod fugiat
                    aspernatur, odit
                    nulla, quis numquam alias Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla facere accusamus
                    explicabo inventore
                    et tenetur! Illo incidunt eveniet consequatur cupiditate minima, sunt distinctio aut ullam accusamus
                    .</p>

            </div>
        </div>
    </div>


    <!-- ***************************** Prevention *************************** -->
    <?php  include"./prevention.php"; ?>

    <hr>
    <!-- ********************************** Contact ******************************* -->
    <?php include"./contact.php"; ?>


    <!-- ****************************** Footer *********************************** -->
    <?php   include"./partials/footer.php";    ?>

    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>