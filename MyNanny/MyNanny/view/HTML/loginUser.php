<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="icon" type="image/png" href="../../Images/logoBlanco.png">
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
            <img src="../../Images/fondoSignUpNanny3" id="fondo">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <div class="row justify-content-center image">
                            <img src="../../Images/logoLogin.png" width="160" height="160" />
                        </div><br>

                        
                        <form class="form-signin" action="../PHP/login.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="usrName" name="emailClient" class="form-control" placeholder= "Username" required autofocus> 
                                <label for="usrName"><i class="fas fa-user"></i> Email</label>

                            </div>

                            <div class="form-label-group">                    
                                <input type="password" id="usrPassword" name="passClient" class="form-control" placeholder ="Password"required autofocus>
                                <label for="usrPassword"><i class="fas fa-key"></i> Password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">
                                <h5>Sign in <i class="fas fa-sign-in-alt"></i></h5>
                            </button>

                        </form>
                        <form class="form-signin">
                            <hr class="my-4">
                            <small class="row justify-content-center">¿Aún no te haz registrado?</small><br>
                            <button class="btn btn-lg btn-sign-up btn-block text-uppercase" type="submit">
                                <h5>Sign up <i class="fas fa-user-plus"></i></h5>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id = "right">

        </div>
    </div>

    <br><br>
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