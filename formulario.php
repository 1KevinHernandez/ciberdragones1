<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="js/sweetalert2@11.js">
    <link rel="stylesheet" href="js/jquery-3.6.3.min.js.css">
    <title>Formulario</title>

</head>

<body>
    <div class="p-5 mb-3 bg-danger text-white"></div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mx-auto" style="text-align: center;">
                <div class="col-md-8 mx-auto">
                    <img src="img/LOGO_TUVSA.svg" alt="logo" class="img-fluid">

                    <div class="container-fluid">
                        <div class="row mb-5">
                            <div class="col-md-4 mt-5"></div>
                            <div class="col-md-4 mt-5">
                                <form action="larespuesta.php" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">usuario:</label>
                                        <input type="text" class="form-control" name="correo" required />
                                        <div class="form-text">escribir usuario</div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">password:</label>
                                        <input type="password" class="form-control" name="password" required />
                                        <div class="form-text">escribir password:</div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                    <br>
                                </form>
                                <br>
                            </div>
                            <br>
                            <div class="col-md-3 mt-5"></div>
                            <div class="card mx-auto bg-light" style="width: 20rem; text-align: left;">
                                <div class="card-body">

                                    no tienes cuenta <a href="usuarios.html">crear cuenta</a>

                                </div>
                            </div>
                        </div>

</body>

</html>