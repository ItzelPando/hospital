<!doctype html>
<html lang="en">
    <head>
        <title>Services</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link  rel="stylesheet" href="css/services.css">
    </head>

    <body>
        <header>
            <?php include 'navbar.php';?>
        </header>
        <main>
        <div class="grid" style="margin-top: 30px;">
                <div class="row">
                    <div class="columna_1 col-sm-7">
                        <h2>
                            Laboratory
                        </h2>
                        <div class="linea">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec ac metus mi. Nulla aliquam pretium risus egestas pretium. 
                        Donec ut vehicula lectus. In efficitur felis at lorem semper euismod. 
                        Nullam pulvinar mauris non pretium laoreet. Nullam sed libero quis massa porta lobortis. 
                        Etiam sodales eu massa sit amet pretium. Pellentesque sit amet metus non lorem pretium mollis sit amet et arcu. 
                        Proin iaculis justo metus, non molestie ante bibendum nec. Maecenas lectus sem, fermentum ut mollis ac, feugiat sed odio. 
                        Donec lobortis eros sed ante varius, in efficitur ligula scelerisque.<br></p>
                        <p>
                        Quisque et sagittis lorem. Proin vitae nulla neque. Cras maximus nisi sem, quis maximus purus iaculis quis. 
                        In odio nisi, condimentum et orci ac, cursus cursus diam. Quisque consequat ornare consequat. 
                        Nam viverra augue sem, id pellentesque magna 
                        </p>
                        <div>
                            <img class="labs" src="img/labs.jpg">
                        </div>
                    </div>
                    <div class="columna_2 col-sm-4"> 
                        <h2 style="text-align: center;">Doctors available</h2>
                        <div id="carouselVertical" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/doc1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/doc2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/doc3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselVertical" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselVertical" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
        </main>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var carouselVertical = document.getElementById('carouselVertical');
                var bsCarousel = new bootstrap.Carousel(carouselVertical, {
                    interval: 5000, // Cambia la velocidad del carrusel según sea necesario
                    keyboard: true,
                    slide: true,
                    pause: 'hover'
                });
            });
        </script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        </main>
    </body>

</html>