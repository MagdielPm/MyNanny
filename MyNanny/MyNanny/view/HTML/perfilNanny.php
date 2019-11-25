<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/perfilNanny.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="perfilNanny">
	<header>
        <div class="container-fluid">
            <div class="col-5 ml-3 text-white">
                <h1>{{nombreNanny}}</h1>
            </div>
            <div class="col-6 p-2" align="right">
            	<a href="#" class="btn btn-outline-info border-white text-white" role="button">Index</a>
            	<button class="btn btn-outline-info border-white text-white">Cerrar sesión</button>
            </div> 
        </div>
    </header>

    <div class="container">
    	<div class="row">
    		<div class="col-4 mt-2">
    			<img :src="fotoPerfil" alt="" class="rounded border border-dark" width="350" height="500">
    		</div>
    		<div id="perfilNanny-datos" class="col-6 mt-2">
    			<div class="row">
    				<div class="col-6">
	    				<h3>Datos</h3>
	    			</div>
	    			<div class="col-6">
	    				<button type="button" class="btn btn-link float-right" @click="editarPerfil">{{boton}}
	    				</button>
	    			</div>
    			</div>
    			<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="col-sm-2 col-form-label">Nombre:</label>
				  	</div>
				  		<input type="text" name="nombreNnny" v-model="nombreNanny" :class="editar" :disabled="isDisabled">
					</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="col-sm-2 col-form-label">Direccion:</label>
				  	</div>
				  		<input type="text" name="direccion" v-model="direccion" :class="editar" :disabled="isDisabled">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="col-sm-2 col-form-label">Telefono:</label>
				  	</div>
				  		<input type="number" name="telefono" v-model="telefono" :class="editar" :disabled="isDisabled">
				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="col-sm-2 col-form-label">Correo:</label>
				  	</div>
				  		<input type="email" name="correo" v-model="correo" :class="editar" :disabled="isDisabled">
				</div>
				<label class="col-sm-2 col-form-label">Calificación:</label>
				<h2 class="row justify-content-center">{{calificacion}}</h2>
				<div class="form-group">
    				<label for="aboutMe">Sobre mi:</label>
    				<textarea :class="editar" name="aboutMe" :disabled="isDisabled">{{aboutMe}}</textarea>
    			</div>
    		</div>
    	</div>
    	<div id="perfilNanny-comentarios" class="row mt-5 justify-content-center">
    		<div class="col-8 mx-5 mb-5 border border-dark" id="perfilNanny-caja" v-for="comentario in comentarios">
    			<div class="form-group">
    				<label for="comentario">{{comentario.nombreUsuario}}</label>
    				<textarea class="form-control" name="comentario" disabled>{{comentario.comentario}}</textarea>
    			</div>
    		</div>

    	</div>
    </div>
	</div>
	<footer class="container-fluid">
		<div class="p-2">
			<a href="aboutUs.php" class="btn btn-outline-info border-white text-white" role="button">¿Quienes Somos?</a>
		</div>
	</footer>



	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="../JavaScript/perfilNanny.js"></script>
	<scri>
</body>
</html>