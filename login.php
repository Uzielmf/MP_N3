<?php 
session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-formulario">
        
            <div class="reigstro-texto">
                <div class="dev-logo">
                <img src="/assets/devchallenges.svg" alt="">
                </div>

                <div>
                    <p class="negritas"><b>Login</b></p>
                </div>
            </div>
            <form action="./login_db.php" method="post" enctype="multipart/form-data">
            <div class="container-inputs">
                <label for="email"></label>
                <input class="input" type="email" name="email" required placeholder=" Email">

                <label for="contrasena"></label>
                <input class="input" type="password" name="contrasena"  placeholder=" Password">

                <button class="blue" type="submit">Login</button>
            </div>
            </form>

            <div class="container-login-met">
                <p class="letter-gray">or continue with these social profile</p>
                <div class="container-social-media">
                    <div><img src="./assets/Google.svg" alt=""></div>
                    <div><img src="./assets/Facebook.svg" alt=""></div>
                    <div><img src="./assets/Twitter.svg" alt=""></div>
                    <div><img src="./assets/Gihub.svg" alt=""></div>
                </div>
                <p class="letter-gray"><small>Don't have an acount yet? <a href="./index.php">Register</a></small></p>
            </div>
        
    </div>
    
</body>
</html>