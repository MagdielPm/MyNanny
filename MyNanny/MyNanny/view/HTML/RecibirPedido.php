<!DOCTYPE html>
<html>
<head>
	<title>MyNanny</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../CSS/Pedido.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="recibir">
	<header>
        <div class="container-fluid row">
            <div class="col-5 ml-3 text-white">
                <h1>{{nombreNanny}}</h1>
            </div>
            <div class="col-6 p-2" align="right">
            	<a href="/MyNanny/view/HTML/perfilNanny.html" class="btn btn-outline-info border-white text-white" role="button">Perfil</a>
            	<button class="btn btn-outline-info border-white text-white">Cerrar sesión</button>
            	<a href="/MyNanny/view/HTML/aboutUs.html" class="btn btn-outline-info border-white text-white" role="button">¿Quienes Somos?</a>
            </div> 
        </div>
    </header>


	<div class="container mt-3">
		<div class="alert alert-success" role="alert" v-if="isPedido">
			<h4 class="alert-heading">Tienes una nueva solicitud de {{nombreUsuario}}.</h4>
			<p>Dirección: {{direccion}}</p>
			<p>El día {{dia}} en el horario de {{horaInicio}} a {{horaFinal}} para cuidar a {{cantidadHijos}} niños.</p>
			<hr>
			<div class="p-2" align="right">
				<button type="button" class="btn btn-primary mr-2" @click="agregar">Aceptar</button>
				<button type="button" class="btn btn-danger" @click="rechazar">Rechazar</button>
			</div>
		</div>
	
	
	<div v-if='pendientes.length'>
		<div class='container my-3 border border-dark' v-for='(pendiente, index) in pendientes'>
			<a href="/MyNanny/view/HTML/PerfilUsuario.html" class="text-dark"><strong>{{pendiente.nombre}}</strong></a>
			<p>Dirección: {{pendiente.direccion}}</p>
			<p>El día {{pendiente.dia}} tiene un trabajo en el horario de {{pendiente.HI}} a {{pendiente.HF}} para cuidar a {{pendiente.hijos}} niños.</p>
			<hr>
			<div align="right">
				<button type="button" class="btn btn-danger mb-2" @click="pendiente.isCancelar=!pendiente.isCancelar" 
				:disabled="pendiente.isCancelar">Cancelar</button>
			</div>
				<div  id="recibir" class="alert alert-warning alert-dismissible" v-if="pendiente.isCancelar" role="alert">
					<p><strong>¿Seguro que desea eliminar la petición de {{pendiente.nombre}}?</strong></p>
				  	<p><strong>Una vez cancaledo se le notificara al cliente y no se podrá deshacer esta acción</strong></p>
					<button type="button" class="btn btn-primary mr-2" @click="pendiente.isCancelar=!pendiente.isCancelar">Cancelar</button>
					<button type="button" class="btn btn-danger" @click="cancelar(index)">Aceptar</button>
				</div>
		</div>
	</div>
	<div v-else>
		<h1>CHALE NO HAY TRABAJO</h1>
	</div>
	</div>



	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src="../JavaScript/Pedido.js"></script>
</body>
</html>