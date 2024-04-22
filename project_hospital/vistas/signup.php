<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container" style="max-height: 1000px;">
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
    <div class="col-md-6">
        <div class="text-center">
            <a href="http://project_hospital.test/"><img src="img/LOGO_WEB.png" alt="" style="height: 51px; width: 137px; margin-top: 100px;"></a>
        </div>
        <div class="text-center">
            <h1 style="color: #2C86DA;">Register</h1>
        </div>
        <div class="text-center">
                <p style="font-size: 20px;">Sign in to your account and we'll grant you<br> access to see our doctors.</p>
        </div>
        <form action="/controlador/guardar_datos.php" method="post">
            <div class="form-group">
                <label for="name" class="name">Name</label>
                <input type="text" id="name" class="form-control campo-name" name="name">
            </div>
            <div class="form-group text-align">
                <label for="lastname" class="lastname">Last Name</label>
                <input type="text" id="lastname" class="form-control campo-lastname" name="lastname">
            </div>
            <div class="form-group">
                <label for="email" class="email">Email</label>
                <input type="text" id="email" class="form-control campo-email" name="email">
            </div>
            <div class="form-group">
                <label for="password" class="password">Password</label>
                <div class="campo-password">
                    <input type="password" id="password" class="form-control password-campo" name="password">
                </div>
            </div>
            <div class="terms-of-service">
                <span class="and">You are agreeing to the </span>
                <span class="terms-of-service-1">Terms of Services</span>
                <span class="empty"> and<br> </span>
                <span class="privacy-policy-3">Privacy Policy</span>
            </div>                  
            <button type="submit" class="component-4"><span class="log-in-5">Sign up</span></button>
            </form>
            <div class="sign-up">
                <span class="have-account">Do you have an account? </span><a href="login.php" class="sign-up-8"> Log in</a>
            </div>
    </div>
</body>
</html>
