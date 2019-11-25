const recibir = new Vue({
	el: '#recibir',
	data:{
		nombreNanny: 'Fernanda Castro',
		nombreUsuario: 'Alguien',
		direccion: 'Calle 51 #299 x 58 y 60 Frac. Las Americas',
		dia: 'Sábado',
		horaInicio: '14:00',
		horaFinal: '20:00',
		cantidadHijos: '3',
		isPedido: true,
		pendientes:[
		{nombre: 'Amanda Medina', direccion: 'direcion1', dia: 'Domingo', HI:'9:00', HF:'13:00', hijos:'2', isCancelar: false},
		{nombre: 'Alessandra Vallado', direccion: 'direcion2', dia: 'Lunes',HI:'8:00',HF:'18:00', hijos:'2', isCancelar: false},
		{nombre: 'Karen Chan', direccion: 'direcion3', dia: 'Jueves',HI: '12:00',HF:'15:00', hijos:'3', isCancelar: false}
		],
	},
	methods:{
		agregar: function(){
			this.pendientes.push({
				nombre: this.nombreUsuario, direccion: this.direccion, dia: this.dia, HI: this.horaInicio, HF: this.horaFinal, 
				hijos: this.cantidadHijos, isCancelar: false
			})
			this.isPedido = !this.isPedido
		},

		cancelar: function(index){
			this.pendientes.splice(index, 1)
		},

		rechazar: function(){
			this.isPedido = !this.isPedido
		},
	},
})