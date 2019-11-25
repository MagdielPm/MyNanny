<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../CSS/perfil.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="perfil">
	<header>
        <div class="container-fluid row">
            <div class="col-5 ml-3 text-white">
                <h1>{{nombreUsuario}}</h1>
            </div>
            <div class="col-6 p-2" align="right">
            	<a href="#" class="btn btn-outline-info border-white text-white" role="button">PedirNanny</a>
            	<button class="btn btn-outline-info border-white text-white">Cerrar sesión</button>
            </div> 
        </div>
    </header>

    <div class="container">
    	<div class="row">
    		<div class="col-4 mt-2">
    			<img :src="fotoPerfil" alt="" class="rounded" width="350" height="500">
    		</div>
    		<div class="col-6 mt-2">
    			<div class="row">
    				<div class="col-6">
	    				<h3>Datos</h3>
	    			</div>
	    			<div class="col-6">
	    				<button type="button" class="btn btn-link float-right" @click="editarPerfil">{{boton}}</button>
	    			</div>
    			</div>
    			<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="col-sm-2 col-form-label">Nombre:</label>
				  	</div>
				  		<input type="text" name="nombreUsuario" v-model="nombreUsuario" :class="editar" :disabled="isDisabled">
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
				<div class="form-group">
    				<label for="comentario">Sobre los niños:</label>
    				<textarea :class="editar" name="comentario" :disabled="isDisabled">{{aboutNinos}}</textarea>
    			</div>
    		</div>
    	</div>
    	<div class="row mt-5 ">
			<div class="col-4" v-for="hijo in hijos">
    			<img class="rounded-circle mx-auto d-block" :src="hijo.foto" alt=" " width="200" height="200">
    			<div class="input-group my-3">
					<div class="input-group-prepend">
						<label class="col-form-label">Nombre:</label>
				  	</div>
				  		<input type="text" id="nombreHijo" name="nombreHijo" v-model="hijo.nombreHijo" class="mx-2" :class="editar" :disabled="isDisabled">
				</div>
				<div class="input-group mb-3 ">
					<div class="input-group-prepend">
						<label class="col-form-label">Edad:</label>
				  	</div>
				  		<input type="text" id="edadHijo" name="edad" v-model="hijo.edad" class="form-control-plaintext mx-2" value="3" id="edad" disabled>
				</div>
				<div class="input-group my-3">
					<div class="input-group-prepend">
						<label class="col-form-label">Alergias:</label>
				  	</div>
				  		<input type="text" id="alergias" name="alergias" v-model="hijo.alergias" class="mx-2" :class="editar" :disabled="isDisabled">
				</div>

    		</div>
    		<div class="col-4">
				<button type="button" class="btn btn-outline-dark btn-circle btn-lg rounded-circle mx-auto d-block">
    			<i class="fa fa-plus"></i>
    			</button>
    			<div class="input-group my-3 mx-4">
					<div class="input-group-prepend mx-5">
						<label class="col-form-label mx-5">Agregar Hijo</label>
				  	</div>
    		</div>
    	</div>
    </div>
	</div>
	</div>
	<footer class="container-fluid">
		<div class="p-2">
			<a href="/MyNanny/view/HTML/aboutUs.html" class="btn btn-outline-info border-white text-white" role="button">¿Quienes Somos?</a>
		</div>
	</footer>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="../JavaScript/perfil.js"></script>
</body>
</html>