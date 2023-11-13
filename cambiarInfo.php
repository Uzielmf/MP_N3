<?php 
session_start();

if (isset($_SESSION["usuario"])) {
    $email = ($_SESSION["usuario"]["email"] == '') ? "Enter email..." : $_SESSION["usuario"]["email"];

$name = ($_SESSION["usuario"]["name"] == '') ? "Enter name..." : $_SESSION["usuario"]["name"];

$bio = ($_SESSION["usuario"]["bio"] == '') ? "Enter bio..." : $_SESSION["usuario"]["bio"];

$phone = ($_SESSION["usuario"]["phoneNumber"] == '') ? "Enter phone..." : $_SESSION["usuario"]["phoneNumber"];

$contrasena = ($_SESSION["usuario"]["contrasena"] == '') ? "Enter phone..." : $_SESSION["usuario"]["contrasena"];
} else {
    header("Location:./login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="./css/editInfo.css">
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
</div>

<div class="container-info">
        <div>
            <h2>Change Info</h2>
            <p>Changes will be reflected to every services</p>
        </div>
        
        <!-- Pendiete de poner y armar el arcvhivo para manejar los datos -->
        <form action="./cambiarInfo_db.php" method="post" enctype="multipart/form-data">
        <div class="inputs-form">
        <div>

            <div>
                <label for="">CHANGE PHOTO</label>
                <input type="file" accept="image/*" name="imagen">
            </div>

        </div>

        <div class="input-container">
            <label for="">Name</label> <br>
            <input name="name" class="input" type="text" placeholder=' <?php echo $name ?>'>
        </div>

        <div class="input-container">
            <label for="">Bio</label> <br>
            <textarea name="bio" placeholder=" <?php echo $bio ?>" class="input-bio" name="" id="" cols="39" rows="4"></textarea>
        </div>

        <div class="input-container">
            <label for="">Phone</label> <br>
            <input name="phone" class="input" type="text" placeholder="<?php echo $phone ?>">
        </div>

        <div class="input-container">
            <label for="">Email</label> <br>
            <input name="email" class="input" type="text" 
            placeholder=" <?php echo $email ?>">
        </div>

        <div class="input-container">
            <label for="">Password</label> <br>
            <input name="contrasena" class="input" type="text" placeholder=" <?php echo $contrasena ?>">
        </div>

        <div class="input-container">
            <button class="input-button" type="submit">Save</button>
        </div>


        </form>
        </div>


    </div>


</body>