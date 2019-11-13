<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="app1.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial|Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>BuddyPet</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="img-responsive logo" src="image/logo3.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shelters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Full Page Image Header with Vertically Centered Content -->
    <main>

        <section>
            <div class="m-4">
                <h2 class="text-center font-weight-bold"> Jeppe Anan </h2>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div>
                            <img src="image/dog-home.jpg" class="img-fluid img-thumbnail img-radius" alt="Responsive image">
                        </div>
                    </div>
                    <div class="col border">
                        <div class="user-info pt-5 text-left">
                            <p class="font-weight-bold">Email: <a class="ml-2">jeppe@gmail.com</a></p>
                            <p class="font-weight-bold">Phone: <a class="ml-2">+ 45 22 55 77 88</a></p>
                            <p class="font-weight-bold">Address: <a class="ml-2">Tøborgvej 84 Vedbæk, 2900</a></p>
                            <button type="button" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="m-4">
                <h2 class="font-weight-bold container"> Adopted animals </h2>
            </div>

            <div class="container mb-5 font-weight-bold text-center">
                <div class="row">
                    <div class=" col">
                        <img src="image/duck1.jpg" class="img-fluid img-radius img-size" alt="Responsive image">
                        <div class="card img-radius card-body card-color">
                            <h5 class="font-weight-bold card-title">Duck</h5>
                        </div>
                    </div>
                    <div class=" col">
                        <img src="image/ava.webp" class="img-fluid img-radius img-size" alt="Responsive image">
                        <div class="card img-radius card-body card-color">
                            <h5 class="font-weight-bold card-title">Ava</h5>
                        </div>
                    </div>
                    <div class=" col">
                        <img src="image/holly.jpg" class="img-fluid img-radius img-size" alt="Responsive image">
                        <div class="card img-radius card-body card-color">
                            <h5 class="font-weight-bold card-title">Holly</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <h1 class="fotter-title-name mt-3 mb-3">We are Creative Lemons</h1>
                        <p class="fotter-text">We help people and pets find each other and live happier lives together. That's our mission. It's why we exist.</p>
                    </div>
                    <div class="col-sm ml-5">
                    <h1 class="fotter-title mt-3 mb-3"><i class="fas fa-address-book mr-2"></i>Contact us</h1>
                    <p class="fotter-text mb-2"><i class="fas fa-phone mr-2"></i>(45) 45 36 89 54</p>
                    <p class="fotter-text mb-2"><i class="fas fa-envelope mr-2"></i>email@yoursite.com</p>
                    <p class="fotter-text"><i class="fas fa-map-marker-alt mr-2"></i>Pet Street 123 – Copenhagen</p>
                    </div>
                    <div class="col-sm ml-5">
                    <h1 class="fotter-title mt-3 mb-3"><i class="fas fa-hashtag mr-2"></i>Social Media</h1>
                    <p class="fotter-text mb-2"><i class="fab fa-facebook-square mr-2"></i>Facebook</p>
                    <p class="fotter-text mb-2"><i class="fab fa-instagram mr-2"></i>Instagram</p>
                    <p class="fotter-text"><i class="fab fa-linkedin mr-2"></i>Linkedin</p>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright m-0 text-center pb-2">&copy; Copyright 2019 Creative Lemons</p>
        </footer>

    </main>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>

<?php
?>