<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="vistas/css/index.css">
    </head>
    <body>
        <header>
            <?php include 'vistas/navbar.php'?>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <div class="card">
            <img src="vistas/img/hospi.jpg" class="card-img" alt="" style="width: cover; height: 600px;">
            <div id="texto" class="col-md-8">
                <h1>HOSPITAL MEDICARE</h1>
                <p class="col-md-6">Fuimos fundados con el propósito de llevar servicios de prevención y diagnóstico
                    oportuno a la
                    población en México, ofreciéndoles atención humana y equipo tecnológico de calidad a precios
                    accesibles.</p> <br>
                <button id="btn-cita" class="btn btn-primary agendar-cita">Agendar Cita</button>
            </div>
        </div>  
        <div class="btn-container">
            <div class="col-md-3">
                <button class="btn btn-1">
                    <label for="" class="especialidad1">Laboratorios</label>
                    <img src="vistas/img/doc1.png" alt="" id="doctor1">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-2">
                    <label for="" class="especialidad2">Ultrasonido</label>
                    <img src="vistas/img/doc2.png" alt="" id="doctor2">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-3">
                    <label for="" class="especialidad3">Pediatria</label>
                    <img src="vistas/img/doc3.png" alt="" id="doctor3">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-4">
                    <label for="" class="especialidad4">X-RAY</label>
                    <img src="vistas/img/doc4.png" alt="" id="doctor4">
                </button>
            </div>

            <div class="col-md-3">
                <button class="btn btn-5">
                    <label for="" class="especialidad5">Dentista</label>
                    <img src="vistas/img/doc5.png" alt="" id="doctor5">
                </button>
            </div>

        </div>
    </div>

    <!-- Agregar el mapa debajo del contenedor y botón -->
    <div id="mapa">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.1273197485193!2d-104.6515139!3d24.026575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bd3f47c9b73f%3A0x1739f232598383d8!2sHospital%20de%20la%20Paz!5e0!3m2!1ses!2smx!4v1707912841680!5m2!1ses!2smx"
            width="1256px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- Formulario de contacto -->
    <div class="container contact-form">
        <h2>Contáctanos ¡Estamos para Ayudarte!</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escriba su mensaje"></textarea>
            </div> <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </main>
    <footer>
        <?php include 'vistas/footer.php';?>
    </footer>
    </body>
</html>