<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Covid-19 Live Update</title>
</head>

<body>

    <?php

    $data = file_get_contents("https://api.covid19api.com/summary");
    $indialive = json_decode($data, true);
    $count = count($indialive['Countries']);


    // echo "<pre>";
    // print_r($indialive) ;
    // echo "</pre>";

    ?>

    <div class="container-fluid pt-2 pb-3 " style="background-color:#E5E8E8;">
        <h2 class="text-center pt-3 pb-3">Covid-19 Worldwide Live Updates</h2>
        <div class="container mb-2 ms-2 text-primary text-end">
            <h5>Last Updated At: <?php echo $indialive['Global']['Date']; ?></h5>
        </div>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <div class="col">
                <div class="card text-white bg-light  shadow p-3 mb-3 rounded" style=" max-height:120px;">
                    <div class="card-header text-center text-dark">Affected Countries</div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark"><?php echo $count; ?></h6>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-light shadow p-3 mb-3 rounded" style=" max-height:120px;">
                    <div class="card-header text-center text-dark">Total Confirmed</div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark">
                            <?php echo $indialive['Global']['TotalConfirmed'] ?>
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-light shadow p-3 mb-3 rounded" style=" max-height:120px;">
                    <div class="card-header text-center text-dark">Total Recoverd</div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark">
                            <?php echo $indialive['Global']['TotalRecovered'] ?>
                        </h6>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-light shadow p-3 mb-3 rounded" style=" max-height:120px;">
                    <div class="card-header text-center text-dark">Total Deaths</div>
                    <div class="card-body">
                        <h6 class="card-title text-center text-dark"><?php echo $indialive['Global']['TotalDeaths'] ?>
                        </h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






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