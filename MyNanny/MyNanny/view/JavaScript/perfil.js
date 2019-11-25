const perfil = new Vue({
	el: '#perfil',
	data: {
		nombreUsuario: 'Noel Vermillion',
		fotoPerfil: 'http://www.gamersheroes.com/wp-content/uploads/2017/10/Blazblue-Noel-Vermillion-Cosplay-Gamers-Heroes-2-932x1398.jpg',
		direccion: 'C. 51A ...',
		telefono: '9994568423',
		correo: 'noelver@gmail.com',
		isDisabled: true,
		aboutNinos: 'Aqui debe haber alguna descripcion sobre los niños',
		hijos:[
			{nombreHijo: 'Jordan', edad: '4', foto:'https://pm1.narvii.com/6133/a469877d59caaeb18ec6eabefe201b9ea08e4f11_hq.jpg',
			alergias: 'ninguna'},
			{nombreHijo: 'Amanda', edad: '2', foto:'https://1.bp.blogspot.com/-Kn1K6kurIbo/WtbCpZ1CduI/AAAAAAAAAl8/7jrNZdjdBBE6mmP1F8s-onsmK5bsGr9kwCLcBGAs/s1600/74c3ae3b44571f458472f6018efdb8a6.jpg',
			alergias: 'Alguna'},
			{nombreHijo: 'Angel', edad: '6', foto:'https://vignette.wikia.nocookie.net/konosuba/images/d/db/Aqua_-_Anime.png/revision/latest?cb=20170127234540&path-prefix=es',
			alergias: 'ninguna'},
			{nombreHijo: 'Celica', edad: '4', foto:'https://static.zerochan.net/Celica.A..Mercury.full.2673024.png', alergias: 'a algo'}
		]
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