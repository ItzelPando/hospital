<?php
session_start();
// Verificar si ya hay una sesión activa
if(isset($_SESSION['correo'])) {
    // Si hay una sesión activa, redirigir al usuario al dashboard correspondiente
    if(isset($_SESSION['name'])) {
        header("Location: dashboard.php");
    } elseif(isset($_SESSION['doctor_id'])) {
        header("Location: dashboarddoc.php");
    } elseif(isset($_SESSION['admin_id'])) {
        header("Location: dashboardadmin.php");
    }
    exit; // Asegúrate de salir del script después de redirigir
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <main>
    <div class="container">
        <div class="row">
            <div class=" col bg d-none d-lg-block col-md-6" style="background-image: url('img/back_login.png'); background-size: cover; height: 800px; bottom: 0%;"> 
                <div> 
                    <br><h3 style="margin-top: 250px; padding-left: 30px; padding-right: 30px; font-family: istok web; font-weight: bold;">Welcome to your health refuge where your well-being is our priority.</h3>
                </div>
                <div style="margin-top: 55px; padding-left: 30px; padding-right: 40px;">
                    <ul>
                        <li class="my-2">Schedule and manage your medical appointments online, quickly and easily.</li> <br>
                        <li class="my-2">Access your medical history at any time.</li> <br>
                        <li class="my-2">Check your laboratory test results instantly and securely.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="text-center">
                    <a href="http://project_hospital.test/"><img src="img/LOGO_WEB.png" alt="" style="height: 51px; width: 137px; margin-top: 100px;"></a>
                </div>
                <div class="text-center">
                    <h1 style="color: #2C86DA;">Welcome back</h1>
                </div>
                <div class="text-center">
                    <p>Log in to your account and we’ll get you in to see our doctors.</p>
                </div>
                <form action="/controlador/bd_hospital.php" method="post">
                    <div class="form-group">
                        <label for="email" class="email">Email</label>
                        <input type="text" id="correo" class="form-control campo-email" name="correo">
                    </div>
                <div class="form-group">
                    <label for="password" class="password">Password</label>
                    <div class="campo-password">
                        <input type="password" id="password" class="form-control password-campo" name="password">
                        <div class="eye"></div>
                    </div>
                </div>
                    <span class="forgot-password"><a href="">forgot password?</a></span>
                    <button type="submit" class="component-4"><span class="log-in-5">Log in</span></button>
                    <div class="sign-up">
                        <span class="dont-have-account">Don’t have an account? </span>
                        <a href="signup.php" class="sign-up-8">Sign up</a>
                    </div>
                </form>
            </div>
        </div>               
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
