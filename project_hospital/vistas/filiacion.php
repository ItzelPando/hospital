<?php
session_start();

// Verificar si no hay una sesión activa
if(!isset($_SESSION['correo'])) {
    // Si no hay una sesión activa, redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit; // Asegúrate de salir del script después de redirigir
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filiacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/filiacion.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header>
        <?php include 'navbar2.php'?>
    </header>
    <main>
    <h1 style="margin: 50px;"><center> Affiliation Data</center></h1>
    <div class="container">
        <div class="rectangulo">
            <div id="paso1">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 25%">25%</div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="nombre">Name(s):</label>
                        <input type="text" class="form-control" id="nombre" placeholder="">
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="primer-apellido">First last name:</label>
                            <input type="text" id="primer-apellido" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="segundo-apellido">Second last name:</label>
                            <input type="text" id="segundo-apellido" class="form-control" placeholder="">
                        </div> 
                    </div><br>
                    <div class="form-group">
                        <label for="mensaje">Phone number:</label>
                        <input type="text" id="number" class="form-control" placeholder="">
                    </div>
                </form> <br>
                <button class="btn-primary" onclick="mostrarPaso2()">Submit</button>
            </div>
            <div id="paso2" style="display: none;">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%">50%</div>
                </div>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pais">Country:</label>
                            <input type="text" id="country" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="segundo-apellido">State:</label>
                            <input type="text" id="state" class="form-control" placeholder="">
                        </div> 
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pais">City:</label>
                            <input type="text" id="city" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="fraccionamiento">Neighborhood/Subdivision:</label>
                            <input type="text" id="fracc" class="form-control" placeholder="">
                        </div> 
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="pais">Address:</label>
                            <input type="text" id="address" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label for="ext-num">Exterior number:</label>
                            <input type="text" id="ext-num" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-3">
                            <label for="int-num">Interior number:</label>
                            <input type="text" id="int-num" class="form-control" placeholder="">
                        </div> 
                    </div><br>
                </form>
                <button class="btn-primary" onclick="mostrarPaso1()">Back</button>
                <button class="btn-primary" onclick="mostrarPaso3()">Submit</button>
            </div>
            <div id="paso3" style="display: none;">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 75%">75%</div>
                </div>
                <form>
                    <h3>Blood type</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <label><input type="radio" id="A" name="tipo-sangre" value="A">A</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="O" name="tipo-sangre" value="O">O</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="A-" name="tipo-sangre" value="A-">A-</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="O-" name="tipo-sangre" value="O-">O-</label>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-md-3">
                            <label><input type="radio" id="B" name="tipo-sangre" value="B">B</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="AB" name="tipo-sangre" value="AB">AB</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="B-" name="tipo-sangre" value="B-">B-</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" id="AB-" name="tipo-sangre" value="AB-">AB-</label>
                        </div>
                    </div> <br>
                    <div class="form-group">
                        <label for="mensaje">Allergies:</label>
                        <textarea class="form-control" id="mensaje" rows="4" placeholder="Escriba su mensaje"></textarea>
                    </div> <br>
                </form>
                <button class="btn-primary" onclick="mostrarPaso2()">Back</button>
                <button class="btn-primary" onclick="mostrarPaso4()">Submit</button>
            </div>
            <div id="paso4" style="display: none;">
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 100%">100%</div>
                </div>
                <form>
                    <h3>Immunization</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm1" name="inmunizacion" value="pen1">Pentavalente 1</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm2" name="inmunizacion" value="pen2">Pentavalente 2</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm3" name="inmunizacion" value="pen3">Pentavalente 3</label>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm4" name="inmunizacion" value="opv">OPV (1)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm5" name="inmunizacion" value="opv">OPV (2)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm6" name="inmunizacion" value="opv">OPV (3)</label>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm7" name="inmunizacion" value="vph">VPH (1)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm8" name="inmunizacion" value="vph">VPH (2)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm9" name="inmunizacion" value="vph">VPH (3)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm1" name="inmunizacion" value="pen1">Fiebre Amarilla</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm2" name="inmunizacion" value="pen2">DTP</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm3" name="inmunizacion" value="pen3">Influenza</label>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm4" name="inmunizacion" value="opv">Hepatitis A (1)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm5" name="inmunizacion" value="opv">Hepatitis A (2)</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm6" name="inmunizacion" value="opv">Varicela</label>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm7" name="inmunizacion" value="vph">BCG</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm8" name="inmunizacion" value="vph">Hepatits B</label>
                                </div>
                                <div class="col-md-4">
                                    <label><input type="radio" id="inm9" name="inmunizacion" value="vph">IPB</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> <br>
                <button class="btn-primary" onclick="mostrarPaso3()">Back</button>
                <button class="btn-primary">Submit</button>
        </div>

        <script>
            function mostrarPaso1(){
                // Muestra el paso 2
                document.getElementById('paso1').style.display = 'block';
                document.getElementById('paso2').style.display = 'none';
                document.getElementById('paso3').style.display = 'none';
                document.getElementById('paso4').style.display = 'none';
            }

            function mostrarPaso2() {
                // Muestra el paso 2
                document.getElementById('paso1').style.display = 'none';
                document.getElementById('paso2').style.display = 'block';
                document.getElementById('paso3').style.display = 'none';
                document.getElementById('paso4').style.display = 'none';
            }

            function mostrarPaso3() {
            // Muestra el paso 3
            document.getElementById('paso1').style.display = 'none';
            document.getElementById('paso2').style.display = 'none';
            document.getElementById('paso3').style.display = 'block';
            document.getElementById('paso4').style.display = 'none';
            }

            function mostrarPaso4() {
            // Muestra el paso 4
                document.getElementById('paso1').style.display = 'none';
                document.getElementById('paso2').style.display = 'none';
                document.getElementById('paso3').style.display = 'none';
                document.getElementById('paso4').style.display = 'block';
            }
    </script>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>