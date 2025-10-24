const { createApp } = Vue;

createApp({
  data() {
    return {
      // Campos del formulario
      marca: '',
      talla: '',
      color: '',
      cantidad: '',
      precio: '',
      categoria: '',
      terminos: false,

      // Validación de cada campo
      valid: {
        marca: false,
        talla: false,
        color: false,
        cantidad: false,
        precio: false,
        categoria: false,
      },

      // Para mostrar mensajes
      tocado: {
        marca: false,
        talla: false,
        color: false,
        cantidad: false,
        precio: false,
        categoria: false,
      },

      error: false,
      exito: false,
    };
  },
  methods: {
    // Expresiones regulares para validación
    regex(campo) {
      switch (campo) {
        case 'marca':
        case 'color':
          return /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
        case 'cantidad':
          return /^[1-9]\d*$/;
        case 'precio':
          return /^(?:\d+|\d*\.\d+)$/;
        default:
          return /.*/;
      }
    },

    // Marca campo como tocado para mostrar validación
    marcarComoTocado(campo) {
      this.tocado[campo] = true;
    },

    // Validar un campo individual
    validarCampo(campo) {
      if (campo === 'talla' || campo === 'categoria') {
        this.valid[campo] = this[campo] !== '';
      } else {
        this.valid[campo] = this.regex(campo).test(this[campo]);
      }
    },

    // Clase de validación (verde/rojo)
    getClaseValidacion(campo) {
      if (!this.tocado[campo]) return '';
      return this.valid[campo] ? 'formulario3__grupo-correcto' : 'formulario3__grupo-incorrecto';
    },

    // Clase del icono
    getClaseIcono(campo) {
      return this.valid[campo] ? 'fa-circle-check' : 'fa-circle-xmark';
    },

    // Enviar formulario
    enviarFormulario() {
      // Validamos todos los campos antes de enviar
      Object.keys(this.valid).forEach(campo => this.validarCampo(campo));
      Object.keys(this.tocado).forEach(campo => this.marcarComoTocado(campo));

      // Revisamos si todos los campos son válidos y se aceptaron términos
      const todosValidos = Object.values(this.valid).every(v => v) && this.terminos;

      if (todosValidos) {
        this.exito = true;
        this.error = false;

        // Resetear formulario después de 3s
        setTimeout(() => {
          this.marca = '';
          this.talla = '';
          this.color = '';
          this.cantidad = '';
          this.precio = '';
          this.categoria = '';
          this.terminos = false;

          Object.keys(this.valid).forEach(campo => this.valid[campo] = false);
          Object.keys(this.tocado).forEach(campo => this.tocado[campo] = false);

          this.exito = false;
        }, 3000);

      } else {
        this.error = true;

        // Ocultar mensaje de error después de 3s
        setTimeout(() => {
          this.error = false;
        }, 3000);
      }
    }
  }
}).mount('#app');
