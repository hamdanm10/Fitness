<?php   
    include "config.php";
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
?>
<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@400;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Fitness</title>
</head>
<body>
    
    <!-- Navbar -->
    <form action="" method="POST">
        <nav class="navbar navbar-expand-lg text-white fixed-top px-5 py-3">
            <a class="navbar-brand" href="#" style="margin-right: 90px;">
                <img src="favicon.png" alt="" style="width: 50px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-uppercase mx-auto">
                <?php 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?php echo $row["menu_name"]?></a>
                        </li>
                <?php
                        }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                ?>
                </ul>
                <a href="" class="btn-join-us text-uppercase">
                    Join Us
                </a>
            </div>
        </nav>
    </form>
    <!-- End Navbar -->

    <!-- Header -->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active" style="background-image: url('img/slider-bg-1.jpg')">
                <div class="h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg text-center text-white">
                            <h3>Build Up Your</h3>
                            <h4>Body Shape</h4>
                            <h1>Strength</h1>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <a href="" class="btn-join-us text-uppercase">Join Us</a>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('img/slider-bg-2.jpg')">
                <div class="h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-lg text-center text-white">
                            <h3>Build Up Your</h3>
                            <h4>Body Shape</h4>
                            <h1>Strength</h1>
                            <p>Build Your Body and Fitness with Professional Touch</p>
                            <a href="" class="btn-join-us text-uppercase">Join Us</a>
                        </div>    
                    </div>
                </div>
            </div>
          </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- End Header -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>