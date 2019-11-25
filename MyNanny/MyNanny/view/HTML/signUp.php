<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="icon" type=" image/png" href="../../Images/logoBlanco.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <script src="https://kit.fontawesome.com/44e20a6927.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <img src="../../Images/logoBlanco.png" class="logoNavBar">
        </div>
    </header>

    <div class="container">
        <div class="row">
            <img src="../../Images/fondoSignUpNanny3" id="fondoSignUp">
            <div class="col-6 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <div class="row justify-content-center ">
                            <img src="../../Images/logoSignUp.png" width="160" height="160" />

                        </div><br>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <label for="nombre">Nombre(s)</label>
                                <input type="text" id=nombre class="form-control" placeholder="nombre" required
                                    autofocus>
                                    <br>
                            </div>
                            <div class="form-label-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" id="apellidos" class="form-control" placeholder="apellidos" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="telefono"><i class="fas fa-phone-alt"></i> Teléfono</label>
                                <input type="tel" id="telefono" class="form-control" placeholder="telefono" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="correo"><i class="fas fa-envelope"></i> Email</label>
                                <input type="email" id="correo" class="form-control" placeholder="correo" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="username"><i class="fas fa-user"></i> Username</label>
                                <input type="text" id="username" class="form-control" placeholder="username" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="signUpPassword"><i class="fas fa-key"></i> Password</label>
                                <input type="password" id="signUpPassword" class="form-control"
                                    placeholder="signUpPassword" required>
                                    <br>
                            </div>
                        </form>

                    </div>
                    <img src="../../Images/baby.jpg" class="img-fluid fI2">
                </div>
            </div>
            <div class="col-6 mx-auto">

                <div class="card card-signin my-5">
                    <div class="row justify-content-center ">
                        <img src="../../Images/map.png" width="160" height="160">
                    </div>

                    <div class="card-body">
                        <form class="form-signin">
                            <div class="form-label-group">
                                <label for="calle"><i class="fas fa-road"></i> Calle</label>
                                <input type="text" id=calle class="form-control" placeholder="calle" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="numeroExt">Número exterior</label>
                                <input type="text" id="numeroExt" class="form-control" placeholder="numeroExt" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="numeroInt">Número interior (opcional)</label>
                                <input type="text" id="numeroInt" class="form-control" placeholder="numeroInt">
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="fracc">Fraccionamiento</label>
                                <input type="text" id="fracc" class="form-control" placeholder="fracc" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="municipio">Municipio</label>
                                <input type="text" id="municipio" class="form-control" placeholder="municipio" required>
                                <br>
                            </div>
                            <div class="form-label-group">
                                <label for="estado">Estado</label>
                                <input type="text" id="estado" class="form-control" placeholder="estado" required>
                                <br>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">
                                <h5>Ingresar <i class="fas fa-sign-in-alt"></i></h5>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <hr class="new1">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a title="About us" href="https://www.facebook.com/">
                    <img src="../../Images/aboutUs.png" width="90" height="70" />
                </a>
            </div>
            <div class="col-1">
                <a title="About us" href="https://www.facebook.com/">
                    <img src="../../Images/facebook.png" width="40" height="40" />
                </a>
            </div>
            <div class="col-1">
                    <a title="About us" href="https://www.instagram.com/">
                        <img src="../../Images/instagram.png" width="40" height="40" />
                    </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</body>

</html>