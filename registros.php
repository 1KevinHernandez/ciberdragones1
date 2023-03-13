<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");

$nombre = isset($_POST['nombre']) ?  $_POST['nombre']: '' ;
$apellidoP = isset($_POST['apellidoP']) ?  $_POST['apellidoP']: '' ;
$apellidoM = isset($_POST['apellidoM']) ?  $_POST['apellidoM']: '' ;
$correo = isset($_POST['correo']) ?  $_POST['correo']: '' ;
$password = isset($_POST['password']) ?  $_POST['password']: '' ;
$correoDos = '';

$con = new SQLite3("data.db");
$cs = $con ->  query ("SELECT * FROM insertar WHERE correo='$correo' ");

while ($res = $cs -> fetchArray()) 
{
    $correoDos = $res ['correo'];
}

if ($correoDos == $correo) {
    echo '<script>alert("correo existente")</script>';
    echo'<script> window.location = ("formulario.html")</script>';   
}else{
    $csDos = $con -> query("INSERT INTO insertar (nombre,apellidoP,apellidoM,correo,password) VALUES ('$nombre','$apellidoP','$apellidoM','$correo','$password')");
    echo'<script>alert("registrado")</script>';
    echo'<script> window.location = ("formulario.php")</script>';

}

// while ($res = $cs -> fetchArray()); {$correoDos = $res ['correo'];

// }

// if ($correoDos == $correo)
// {
// echo '<script>alert("correo existente")</script>';
// echo'<script> window.location = ("formulario.html")</script>';
// }



// else {
//     $csDos = $con -> query("INSERT INTO insertar (nombre,apellidoP,apellidoM,correo,contrasenaN) VALUES ('$nombre','$apellidoP','$apellidoM','$correo','$contrasenaN')");
//     echo'<script>alert("registrado")</script>';
//     echo'<script> window.location = ("formulario.html")</script>';
// }


?>