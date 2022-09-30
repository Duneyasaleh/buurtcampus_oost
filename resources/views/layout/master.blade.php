<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Buurtcampus ">
        <meta name="keywords" content="HTML,CSS,PHP">
        <meta name="author" content="Duneya Saleh">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="og:title" property="og:title" content="Duneya">
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/6cec8c0b9b.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1df19dbaed.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <title>Duneya</title>
    </head>
    <body>
    <nav>
        <header id="nav">
            <section id="navbar">
                <div class="nav boven">
                    <div class="menu sticky bovennav navitems">
                        <?php if (!isset($_SESSION['user_id'])) : ?>
                            <a class="nav-items" href="<?php echo url('aanmelden') ?> ">Aanmelden</a>
                        <?php else : ?>
                            <a class="nav-items" href="<?php echo url("gebruiker")?>">Mijn Account</a>
                            <a class="nav-items" href="<?php echo url("loguit")?>">Uitloggen</a>
                            <style>
                            @media screen and (max-width: 800px) {
                                .mobielfix{
                                    margin-right: -100vw!important;
                                }
                            }
                            </style>
                        <?php endif; ?>
                        <a class="nav-items" href="ailto:info@buurtcampus.nl">Info@buurtcampus.nl</a>
                        <a class="nav-items mobielfix" href="#">06234567778</a>
                    </div>
                </div>
            </section>
            <section id="navbar">
                <div class="nav">
                    <div class="menu sticky ondernav">
                        <a href="<?php echo url("/") ?>">
                          <img src="{{ asset('../image/Buurtcampus Oost-logo.svg') }}" alt="logo_buurtcampus" class="logonav"> 
                        </a>
                        <div class="hulp-items">
                            <a class="nav-items hulp-items aanbieden" href="<?php echo url('/') ?>">Home</a>
                            <a class="nav-items hulp-items" href="<?php echo url('Nieuws') ?> ">Nieuws</a>
                        </div>
                    </div>
                </div>
            </section>
        </header>
    </nav>
    <main>

<section>
<div class="container ">
            @yield('content')
</div>

</section>
    </main>

<!-- 
<footer class="bg-light text-center text-lg-start">
    <div  class="text-center p-3" style="background-color:#ff5c97;">
    Copyright&copy; 2020-2021 - Gemaakt door Duneya Saleh
    </div> -->
          
<body>
</html>