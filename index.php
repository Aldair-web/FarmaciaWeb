<?php
	//inicio de sesion
	session_start();
	
	//Uvariables de sesion
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<div id="login">
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
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: black; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}

?>

<body>
        <img class="wave" src="imagenes/wave.png" alt="">
        <div class="contenedor">
        <div class="img">
        <img src="imagenes/undraw_doctor_kw5l.svg" alt="">
        </div>
        <div class="contenido-login">
            <form action="login.php" method="post">
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
    </div>
</body>
    <script src="js\login.js"></script>
  
</html>
