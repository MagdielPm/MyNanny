const perfilNanny = new Vue({
	el: '#perfilNanny',
	data:{
		nombreNanny: 'Fenanda Castro',
		fotoPerfil: 'https://66.media.tumblr.com/d85cade7278cb96b3e28ebe2c04de7c8/tumblr_p9ywoyyI271uo4dr9o1_400.jpg',
		direccion: 'C. 60 ...',
		telefono: '9992157964',
		correo: 'fercastro@gmail.com',
		calificacion: '4.9',
		isDisabled: true,
		aboutMe: 'Aqui un comentario que me deberia describir',
		comentarios:[
			{nombreUsuario: "Noel Vermillion", comentario:"Muy buen trabajo cuidando a mis hijos"},
			{nombreUsuario: "Alberto Figueroa", comentario:"Skeeeree"},
			{nombreUsuario: "Ana Perez", comentario:"Se robo a mi marido"}
		],
	},
	methods:{
		editarPerfil: function(){
			this.isDisabled = !this.isDisabled
			if(this.isDisabled){
				alert('Los cambios de han guardado')
			}
		}
	},
	computed:{
		boton(){
			if (this.isDisabled) {
				return 'Editar Perfil'
			} else {
				return 'Guardar Cambios'
			}
		},
		editar() {
			return{
				'form-control-plaintext' : this.isDisabled,
				'form-control' : !this.isDisabled,
			}
		},
	},
})