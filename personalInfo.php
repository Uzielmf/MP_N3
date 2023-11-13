<?php 
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location:./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="./css/personalInfo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <nav class="nav">
        <div class="logoDev">
            <img src="./assets/devchallenges.svg" alt="">
        </div>

        
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle dropdown-color" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo $_SESSION["usuario"]["name"] ?>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">My profile</a></li>
    <li><a class="dropdown-item" href="#">Group chat</a></li>
    <li><a class="dropdown-item" href="./login.php">Logout</a></li>
  </ul>
</div>


        
    </nav>

    <div class="container-general">
        <div class="titulo-info">
            <h1 class="less-margin">Personal info</h1>
            <p >Basic info, like your name and photo</p>
        </div>

        <div class="container-info">
            <div class="info-section-profile">
                <div>
                <h2>PROFILE</h2>
                <p>some info may be visible to other people</p>
                </div>
                <div><a href="./cambiarInfo.php"><button class="button-edit">Edit</button> </a></div>
            </div>
            <div class="info-section">
                <p class="letter-gray">PHOTO</p>

                <div>
                    <?php 
                    require_once "./database.php";
                    $imgBlob = base64_encode($_SESSION["usuario"]["img_blob"]);
                    echo "<img src='data:image/*;base64,$imgBlob' height='150'/>";


                    ?>
                </div>

            </div>
            <div class="info-section">
                <p class="letter-gray">NAME</p>
                <div><?php echo $_SESSION["usuario"]["name"] ?></div>
            </div>
            <div class="info-section">
                <p class="letter-gray">BIO</p>
                <div><?php echo $_SESSION["usuario"]["bio"] ?></div>
            </div>
            <div class="info-section">
                <p class="letter-gray">PHONE</p>
                <div><?php echo $_SESSION["usuario"]["phoneNumber"] ?></div>
            </div>
            <div class="info-section">
                <p class="letter-gray">EMAIL</p>
                <div><?php echo $_SESSION["usuario"]["email"] ?></div>
            </div>
            <div class="info-section">
                <p class="letter-gray">PASSWORD</p>
                <div><?php echo $_SESSION["usuario"]["contrasena"] ?></div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>