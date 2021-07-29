<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand px-5" href="#">
                <!-- <img src="./images/corona3.jpg" alt="" width="30" height="24"
                        class="d-inline-block  align-text-center"> -->
                Corona
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto px-5">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                    <?php
                        if(isset($page)){
                            echo '  <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#symptoms">Symptoms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#prevention">Preventions</a>
                            </li>';
                        }
                    ?>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./indialive.php">IndiaLiveUpdate</a>
                        </li>
                        
                    <?php
                        if(isset($page)){
                        echo  '<li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#contactid">Contact</a>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</div>