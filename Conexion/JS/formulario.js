const { createApp } = Vue;

createApp({
    data() {
        return {
            // Campos del formulario
            nombre: "",
            apellido_paterno: "",
            apellido_materno: "",
            email: "",
            clave: "",
            telefono: "",
            fecha_nac: "",
            estado: "",
            ciudad: "",
            terminos: false,

            // Estados de validación
            valid: {
                nombre: false,
                apellido_paterno: false,
                apellido_materno: false,
                email: false,
                clave: false,
                telefono: false,
                fecha_nac: false,
                estado: false,
                ciudad: false
            },

            // Campos tocados
            tocado: {
                nombre: false,
                apellido_paterno: false,
                apellido_materno: false,
                email: false,
                clave: false,
                telefono: false,
                fecha_nac: false,
                estado: false,
                ciudad: false
            },

            // Mensajes
            exito: false,
            error: false
        };
    },
    methods: {
        // Validar un campo específico
        validarCampo(campo) {
            const expresiones = {
                nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
                apellido_paterno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
                apellido_materno: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
                email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
                clave: /^.{4,12}$/,
                telefono: /^\d{7,14}$/,
                ciudad: /^[a-zA-ZÀ-ÿ\s]{1,40}$/
            };

            switch(campo) {
                case 'nombre':
                case 'apellido_paterno':
                case 'apellido_materno':
                case 'email':
                case 'clave':
                case 'telefono':
                case 'ciudad':
                    this.valid[campo] = expresiones[campo].test(this[campo].trim());
                    break;
                case 'fecha_nac':
                case 'estado':
                    this.valid[campo] = this[campo] !== "";
                    break;
            }
        },

        // Marcar campo como tocado y validar
        marcarComoTocado(campo) {
            this.tocado[campo] = true;
            this.validarCampo(campo);
        },

        // Clases para mostrar borde verde/rojo
        getClaseValidacion(campo) {
            return {
                'formulario1__grupo-correcto': this.tocado[campo] && this.valid[campo],
                'formulario1__grupo-incorrecto': this.tocado[campo] && !this.valid[campo]
            };
        },

        // Clases para iconos de estado
        getClaseIcono(campo) {
            return this.valid[campo] ? 'fa-circle-check' : 'fa-circle-xmark';
        },

        // Validar todo el formulario
        validarFormulario() {
            // Marcar todos como tocados
            Object.keys(this.tocado).forEach(campo => this.tocado[campo] = true);
            // Validar todos los campos
            Object.keys(this.valid).forEach(campo => this.validarCampo(campo));

            const todosValidos = Object.values(this.valid).every(v => v) && this.terminos;

            if(!todosValidos) {
                this.error = true;
                this.exito = false;
                setTimeout(() => { this.error = false; }, 5000);
            }

            return todosValidos;
        },

        // Enviar formulario
        enviarFormulario() {
            if(this.validarFormulario()) {
                this.exito = true;
                this.error = false;

                console.log('Formulario válido:', {
                    nombre: this.nombre,
                    apellido_paterno: this.apellido_paterno,
                    apellido_materno: this.apellido_materno,
                    email: this.email,
                    clave: this.clave,
                    telefono: this.telefono,
                    fecha_nac: this.fecha_nac,
                    estado: this.estado,
                    ciudad: this.ciudad
                });

                setTimeout(() => {
                    this.exito = false;
                    this.resetFormulario();
                }, 3000);
            }
        },

        // Resetear formulario
        resetFormulario() {
            this.nombre = "";
            this.apellido_paterno = "";
            this.apellido_materno = "";
            this.email = "";
            this.clave = "";
            this.telefono = "";
            this.fecha_nac = "";
            this.estado = "";
            this.ciudad = "";
            this.terminos = false;

            Object.keys(this.valid).forEach(key => this.valid[key] = false);
            Object.keys(this.tocado).forEach(key => this.tocado[key] = false);
        }
    },
    mounted() {
        console.log('Formulario Vue.js cargado correctamente');
    }
}).mount("#app");
