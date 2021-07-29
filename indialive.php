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
    <title>Covid-19 | India</title>
</head>

<body>
    <?php include"./partials/nav.php"; ?>
    <?php

$data = file_get_contents("https://api.covid19india.org/data.json");
$indialive = json_decode($data, true);
$count = count($indialive['statewise']);


// echo "<pre>";
// print_r($indialive) ;
// echo "</pre>";

?>

    <div class="container-fluid pt-2 pb-3 " style="background-color:white;">
        <div class="container py-4">
            <h1 class="text-center">Covid-19 India Live Update</h1>
        </div>



        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card text-white bg-dark shadow p-3 mb-3 rounded"
                        style="min-height:120px; max-height:162px;">
                        <div class="card-header text-center">Total Confirmed</div>
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $indialive['statewise'][0]['confirmed'] ?>
                            </h6>
                            <p class="card-text text-center"><?php echo $indialive['statewise'][0]['deltaconfirmed']?>
                                <i class="fas fa-arrow-up"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-info  shadow p-3 mb-3 rounded"
                        style="min-height:158px; max-height:162px;">
                        <div class="card-header text-center">Total Active</div>
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $indialive['statewise'][0]['active']?></h6>
                            <p class="card-text text-center"></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success shadow p-3 mb-3 rounded"
                        style="min-height:120px; max-height:162px;">
                        <div class="card-header text-center">Total Recoverd</div>
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $indialive['statewise'][0]['recovered'] ?>
                            </h6>
                            <p class="card-text text-center"><?php echo $indialive['statewise'][0]['deltarecovered']?>
                                <i class="fas fa-arrow-up"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-danger shadow p-3 mb-3 rounded"
                        style="min-height:120px; max-height:162px;">
                        <div class="card-header text-center">Total Deaths</div>
                        <div class="card-body">
                            <h6 class="card-title text-center"><?php echo $indialive['statewise'][0]['deaths'] ?></h6>
                            <p class="card-text text-center"><?php echo $indialive['statewise'][0]['deltadeaths'] ?>
                                <i class="fas fa-arrow-up"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ********************************** Statewise Update *************************************** -->

    <?php
    $data = file_get_contents("https://api.covid19india.org/data.json");
    $indialive = json_decode($data, true);
    ?>



    <!-- <div class="container py-4">
        <h1 class="text-center">Covid-19 India Live Update</h1>
    </div> -->
    <div class="container py-4">
        <div class="container mb-2 ms-2 text-primary text-end">
            <h5>Last Updated At: <?php echo $indialive['statewise'][0]['lastupdatedtime']; ?></h5>
        </div>
        <table class="table table-striped border-dark table-hover table-bordered shadow p-3 mb-5 rounded">
            <tr>
                <th>State</th>
                <th>Total</th>
                <th>Active</th>
                <th>Recoverd</th>
                <th>Death</th>
            </tr>

            <?php  

            
            //    echo "<pre>";
            //     print_r($indialive['statewise']) ;
            //     echo "</pre>";
            // echo $indialive['statewise'][11]['state'];
            // echo count($indialive['statewise']);

            $statecount = count($indialive['statewise']);
            $i = 1;
            while($i < $statecount){
            ?>
            <tr>
                <td><?php echo $indialive['statewise'][$i]['state']; ?></td>
                <td><?php echo $indialive['statewise'][$i]['confirmed']; ?></td>
                <td><?php echo $indialive['statewise'][$i]['active']; ?></td>
                <td><?php echo $indialive['statewise'][$i]['recovered']; ?></td>
                <td><?php echo $indialive['statewise'][$i]['deaths']; ?></td>

            </tr>


            <!-- 
            echo $indialive['statewise'][$i]['state']."<br>";
            echo $indialive['statewise'][$i]['confirmed']."<br>";
            echo $indialive['statewise'][$i]['active']."<br>";
            echo $indialive['statewise'][$i]['recovered']."<br>"; -->
            <?php
            $i++;
            }
            ?>

        </table>
    </div>

    <?php include"./partials/footer.php"; ?>


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