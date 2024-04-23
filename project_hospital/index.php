<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Landing</title>
    <link rel="stylesheet" href="vistas/css/index.css">
    <link rel="stylesheet" href="vistas/css/navbar_style.css">
    <link rel="stylesheet" href="vistas/css/footer.css">
    <link rel="stylesheet" href="https://fontawesome.com/">
</head>

<body>
    <header>
        <?php include 'vistas/navbar3.php';?>
    </header>

    <main>
        <img src="vistas/img/hospi.jpg" alt="">
        <div class="container" id="contenedor"> <!--Parent container -->
            <div id="texto">
                <h1 style="font-weight:bolder;">HOSPITAL MEDICARE </h1>
                <div class="row-md-12">
                    <p class="col-md-6" style="margin-top: 15px; font-size:20px; text-align:justify;">We were founded with the purpose of
                        to bring prevention and timely diagnostic services to the population of Mexico, offering them
                        human
                        human attention and quality technological equipment at affordable prices.</p> <br>
                        <a href="vistas/agendarcitasinlogin.php">
                            <button id="btn-cita" class="btn btn-primary agendar-cita">Appointment</button>
                        </a>
                </div>
            </div>
            <div class="row-md-12"> <!-- Carousel -->
                <h2>Services</h2>
                <div class="carousel-container">
                    <div class="carousel">
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/laboratory.jpg" alt="Content Image">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>LABORATORY</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/cardiology.jpg" alt="Content Image">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>CARDIOLOGY</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/ultrasound.jpg" alt="Content Image">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>ULTRASOUND</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/general.jpg" alt="Content Image">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>GENERAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/x-ray.jpg" alt="Content Image">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>X-RAY</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <img class="imagen" src="vistas/img/plastic.jpg" alt="Content Image">
                                <img class="img-doctor" src="vistas/img/doc7.png" alt="">
                            </div>
                            <div class="card-base">
                                <div class="card-info">
                                    <p>PLASTIC SURGERY</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container"> <!--Map-->
                <div class="row">
                    <div class="row-map col-12 col-lg-7">
                        <h2 style="margin-top: 40px;">Find us</h2>
                        <div class="map"> 
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.1273197485193!2d-104.6515139!3d24.026575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bd3f47c9b73f%3A0x1739f232598383d8!2sHospital%20de%20la%20Paz!5e0!3m2!1ses!2smx!4v1707912841680!5m2!1ses!2smx"
                                width="1256px" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                    <div class="contact-form col-12 col-lg-4" style="margin-top: 40px;"> <!-- Form -->
                        <h3 >Contáctanos ¡Estamos para Ayudarte!</h3>
                        <form>
                            <div class="form-group">
                                <label for="nombre">Name:</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <label for="apellido">Last name:</label>
                                <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Message:</label>
                                <textarea class="form-control" id="mensaje" rows="4"
                                    placeholder="Escriba su mensaje"></textarea>
                            </div> 
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'vistas/footer.php';?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <!-- Agregar los scripts de Bootstrap al final del body -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-wRdYJ2lj16Mlvzpzg6UKIHJhxI5T37uMD+3LlLwBJXZG1ZlsFkz5DZ5qM5e8Y5t"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFYEopM6EWFp4N1pafPz32z" crossorigin="anonymous"></script>
</body>
</html>