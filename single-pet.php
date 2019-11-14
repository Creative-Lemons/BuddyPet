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
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">Quiz</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">Pet</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">Shelters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Full Page Image Header with Vertically Centered Content -->
    <main>

        <section class="parallax pt-5">
            <!--<div class="m-4">
                <h2 class="text-center font-weight-bold"> Jeppe Anan </h2>
            </div>-->

            <div class="container border-user-info p-4">
                <div class="row pr-3">
                    <div class="col">
                        <div>
                            <img src="image/golden-retriever.jpg" class="img-fluid img-radius" alt="Responsive image">
                        </div>
                    </div>
                    <div class="col border">
                        <div class="pet-info pt-4 text-left">
                            <h2 class="text-center font-weight-bold available-text"><i class="fas fa-paw paw mr-2"></i>Brownie<i class="fas fa-paw paw ml-2"></i></h2>
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <p class="font-weight-bold">Age: <a class="ml-2">2 year old</a></p>
                                        <p class="font-weight-bold">Breed: <a class="ml-2">Golden Retiever</a></p>
                                        <p class="font-weight-bold">Gender: <a class="ml-2">Male</a></p>
                                    </div>
                                    <div class="col">
                                        <p class="font-weight-bold">Personality: <a class="ml-2">Active</a></p>
                                        <p class="font-weight-bold">Shelter: <a class="ml-2">Dyreværnet</a></p>
                                    </div>

                                </div>
                            </div>
                            <p class="text-center mt-3 font-weight-bold available-text"><i class="far fa-check-circle font-awsome mr-2"></i>Available: <a class="ml-2">Ready to adopt</a></p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        
        <section>
            <div class="m-4">
                <h2 class="font-weight-bold container text-center"> About Brownie</h2>
            </div>
            
            <div>
                </div>
                <div class="border-pet-history container mb-4">
                    <div class="p-4 text-justify mr-2">
                        <h2 class="font-weight-bold ">History</h2>
                        <p>Unfortunately, Brownie, despite his young age, has experienced losing his beloved owner, and relatives have found that Brownie has been very stressed about this, which is nothing to say.</p>
                        <p>
                            Brownie basically loves all people, but has a specific side of his personality where he doesn't tolerate being pressured into something he doesn't want. This is very specifically expressed by the veterinarian. and he is not suitable in a toddler's family, but he would be able to live with big children who can both understand and respect his boundaries as they turn out.
                        </p>
                        <h2 class="font-weight-bold">Health</h2>
                        <p>Fortunately Buddy dosn’t have any health issues.
                            </p>
                            <p class="font-weight-bold">Buddy has a valid passport</p>
                        </div>
                    </div>
                    <div class="text-center">
                    <button type="button" class="btn btn-primary btn-ghost-bordered center-block mb-4 button-pet">Adopt me</button>
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