// function modoEstricto () {
	// 'Use strict';

	var app = app || {};

	app.VistaNuevoCliente = Backbone.View.extend({
		el		: '.contenedor_modulo',
		
		events	: {
			'change .tipo_cliente'	: 'setTipoCliente'
		},

		initialize		: function () {
		// Datos básicos
			this.$nombreFiscal;
			this.$nombreComercial;
			this.$email;
			this.$telefonos; //Puede ser un array de telefonos y tipos
			this.$giro;
			this.$direccion;
			this.$serviciosDeInteres; //Puede ser un array de servicios y tipos
			this.$serviciosConLosQueCuenta; //Puede ser un array de servicios y tipos
			this.$archivo; //Nombre del archivo y el tipo
			this.$comentario; //Puede no haber comentarios
		// Datos especificos
			this.$rfc;
			this.$representante;
			this.$paginaWeb;
		// Datos de contacto
			this.$nombreContacto;
			this.$correoContacto;
			this.$cargoContacto;
			this.$telefonosContacto; //Puede ser un array de telefonos y tipos
		},

		render			: function () {
			return this;
		},

		setTipoCliente	: function (elemento) {
			/*currentTarget obtiene el elemento html,
			  este se utiliza como selector para obtener
			  el valor del elemento seleccionado; en este
			  caso el TIPO de cliente a registrar*/
			console.log($(elemento.currentTarget).val());
		}
	});

	app.vistaNuevoCliente = new app.VistaNuevoCliente();

	// console.log(app.vistaNuevoCliente.$el);
// }