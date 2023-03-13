<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/sweetalert2@11.js"></script>

    <title>alerta</title>
    
</head>
</html>

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

session_start();

$correo = isset($_POST['correo']) ?  $_POST['correo']: '' ;
$password = isset($_POST['password']) ?  $_POST['password']: '' ;
$correoTabla = '۞';
$passTabla = '۞';

$con = new SQLite3("data.db");

$cs = $con ->  query (" SELECT * FROM insertar WHERE correo = '$correo'");

while ( $result = $cs -> fetchArray()) {

    $correoTabla = $result['correo'];
 
   
}

$_SESSION['$correoTabla'] = $correoTabla;


if ($correo == $correoTabla) {

    $cs = $con ->  query (" SELECT * FROM insertar WHERE password = '$password'");
    while ( $result = $cs -> fetchArray()) {

        $passTabla = $result['password'];
       
       
    }
    $_SESSION['$passTabla'] = $passTabla;
    if ($passTabla == $password) {
        echo '<script>window.location="index.php"</script>';

        
    }else{
       echo '
       <script>
       Swal.fire({
        title: "* Correo o Contraseñas Incorrecta",
    }).then((result) => {
            window.location="formulario.php"
        })
       </script>';
      

    }

}else{
    
    echo '
       <script>
       Swal.fire({
        title: "* Usuario no registrado ",
    }).then((result) => {
            window.location="formulario.php"
        })
       </script>';
   
}

?>
