<?php
    session_start();
    $nameClient = $_SESSION['nameClient'];
    //$idClient = $_SESSION['idClient'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedir niñera</title>
    <link rel="icon" type="image/png" href="../../Images/logoBlanco.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/pedirNiñera.css">
    <script src="https://kit.fontawesome.com/44e20a6927.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <img src="../../Images/logoBlanco.png" class="logoNavBar">
        </div>
    </header>

    <img src="../../Images/baby5.jpg" alt="New york" id="fondo" style="width:100%;">

    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <div class="row justify-content-center ">
                            <h2>Bienvenido <?php echo " ".$nameClient?></h2><br>
                        </div>
                        <div class="form-label-group">
                            <br>
                            <h4>Número de niños: </h4>
                            <input list="numeroNiños" name="numeroNiños" class="form-control" style="width:150px">
                            <datalist id="numeroNiños">
                                <option value="1">
                                <option value="2">
                                <option value="3">
                            </datalist>
                        </div>

                        <div class="form-label-group">
                            <h4>¿Cuántas horas necesitas el servicio? </h4>
                            <input list="numeroHoras" name="numeroHoras" class="form-control" style="width:150px">
                            <datalist id="numeroHoras">
                                <option value="1">
                                <option value="2">
                                <option value="3">
                                <option value="4">
                                <option value="5">
                                <option value="6">
                                <option value="7">
                                <option value="8">
                                <option value="9">
                                <option value="10">
                                <option value="11">
                                <option value="12">
                            </datalist>
                        </div>


                        <div class="form-label-group">
                            <h4>¿A qué hora necesitas el servicio? </h4>
                            <div class="input-group">
                                <input list="horario" name="horario" class="form-control" style="width:150px">
                                <input list="amPm" name="amPm" class="form-control" style="width:100px">
                            </div>
                            <datalist id="horario">
                                <option value="1">
                                <option value="2">
                                <option value="3">
                                <option value="4">
                                <option value="5">
                                <option value="6">
                                <option value="7">
                                <option value="8">
                                <option value="9">
                                <option value="10">
                                <option value="11">
                                <option value="12">
                            </datalist>
                            <datalist id="amPm">
                                <option value="am">
                                <option value="pm">
                            </datalist>
                        </div>
                        <form class="form-signin">
                            <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">
                                <h5>Buscar Nanny <i class="fab fa-sistrix"></i></h5>
                            </button>
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>

</html>