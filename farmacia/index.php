<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href = "https://fonts.googleapis.com/css2? family = Poppins: wght @ 700 & display = swap" rel = "hoja de estilo">
    <link rel="stylesheet" type ="text/css "href="css\style.css">
    <link rel="stylesheet" type ="text/css "href="css\css\all.min.css">
</head>
<?php
session_start();
if(!empty($_SESSION['us_tipo'])){
    header('Location:Controlador\logincontroller.php');

}
else{
session_destroy();

?>
<body>
        <img class="wave" src="imagenes/wave.png" alt="">
        <div class="contenedor">
        <div class="img">
        <img src="imagenes/undraw_doctor_kw5l.svg" alt="">
        </div>
        <div class="contenido-login">
            <form action="Controlador\logincontroller.php"  method="post">
            <img src="imagenes/logo.png" alt="">
            <h2>Farmacia</h2>
            <div class="input-div dni">
                <div class="i">
                        <i class="fas fa-user"></i> 
                         </div>
                            <div class="div">
                            <h5>DNI</h5>
                            <input type="text"name="user" class="input">
                            </div>
                         </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div> 
                        <div class="div">
                            <H5>Contraseña</H5>
                            <input type="password" name="pass" class="input">
                        </div>   
                    </div>
                    <a href="">sesion</a>
                    <input type="submit" class="btn" value="Iniciar Sesion">
            </form>
        </div>
    </div>
</body>
    <script src="js\login.js"></script>
  
</html>
<?php
}
?>