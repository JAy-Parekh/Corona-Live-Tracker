<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Contact</title>

</head>

<body>


    <?php
  include"./partials/dbconnect.php";

  if($_POST){
    $name = $_POST['txt1'];
    $age = $_POST['txt2'];
    $gender = $_POST['txt3'];
    // $symptoms = $_POST['txt4'];
    $email = $_POST['txt5'];
    $mobile = $_POST['txt6'];
    $desc = $_POST['txt7'];


  $sql = mysqli_query($conn, "INSERT INTO `contact` (`user_name`, `user_age`, `user_gender`, `user_email`, 
  `user_mobile`, `user_desc`) VALUES ('$name', '$age', '$gender', '$email', '$mobile', '$desc');") 
    or die(mysqli_error($conn));

    

if($sql){
  echo "<script>alert('Inserted Successfully!')</script>";
}

  }

  ?>

    <div class="container my-4" id="contactid" style="width:70%;">
        <h1 class="heading mb-4 text-center"> Contact us </h1>
        <form action="" method="post">
            <div class="form-group my-1">
                <label for="name">
                    <h6><i class="fas fa-user-circle"></i> Name</h6>
                </label>
                <input type="text" maxlength="15" class="form-control form-control-sm" name="txt1" required>
            </div>

            <div class="form-group my-1">
                <label for="age">
                    <h6><i class="fas fa-user-clock"></i> Age</h6>
                </label>
                <input type="number" class="form-control form-control-sm" name="txt2" required>
            </div>

            <label for="gender">
                <h6><i class="fas fa-venus-mars"></i> Gender</h6>
            </label>
            <select class="form-select form-control-sm my-1" name="txt3" aria-label="Default select example">
                <option selected>Select </option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            <!-- <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Fever">
              <label class="form-check-label" name="txt4" for="inlineCheckbox1">Fever</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Cough">
              <label class="form-check-label" name="txt4" for="inlineCheckbox2">Cough</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="smell">
              <label class="form-check-label" name="txt4" for="inlineCheckbox3">Loss Of Smell</label>
          </div>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Breath">
              <label class="form-check-label" name="txt4" for="inlineCheckbox3">Breathing Problem</label>
          </div> -->


            <div class="form-group my-1">
                <label for="email">
                    <h6><i class="fas fa-envelope"></i> Email</h6>
                </label>
                <input type="email" class="form-control form-control-sm" name="txt5" required>
            </div>

            <div class="form-group my-1 ">
                <label for="mobile">
                    <h6><i class="fas fa-mobile-alt"></i> Mobile</h6>
                </label>
                <input type="number" class="form-control form-control-sm" name="txt6" required>
            </div>

            <div class="form-group">
                <label for="desc">
                    <h6><i class="fas fa-comment-alt"></i> Description</h6>
                </label>
                <textarea name="txt7" class="form-control form-control-sm" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="my-1 btn btn-primary">Submit</button>

        </form>
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