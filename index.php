<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-formulario">
        
            <div class="reigstro-texto">
                <div class="dev-logo">
                <img src="/assets/devchallenges.svg" alt="">
                </div>

                <div class="negritas">
                    <p><strong>Join thousands of learners from <br> around the world</strong></p>
                </div>

                <div>
                    <p>Master web development by making real-life <br> projects. There are multiple paths for you to <br> choose</p>
                </div>
            </div>
            <form action="./registrarse_db.php" method="post" enctype="multipart/form-data">
            <div class="container-inputs">
                <label for="email"></label>
                <input class="input" type="email" name="email" required placeholder=" Email">

                <label for="contrasena"></label>
                <input class="input" type="password" name="contrasena" required placeholder=" Password">

                <button class="blue" type="submit">Start coding now</button>
                </form>
            </div>

            <div class="container-login-met">
                <p class="letter-gray">or continue with these social profile</p>
                <div class="container-social-media">
                    <div><img src="./assets/Google.svg" alt=""></div>
                    <div><img src="./assets/Facebook.svg" alt=""></div>
                    <div><img src="./assets/Twitter.svg" alt=""></div>
                    <div><img src="./assets/Gihub.svg" alt=""></div>
                </div>
                <p class="letter-gray"><small>Already a member? <a href="./login.php">Login</a></small></p>
            </div>
    </div>
    
</body>
</html>