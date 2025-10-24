<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Stock</title>
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  
  <!-- CSS del formulario -->
  <link href="../CSS/crear2.css" rel="stylesheet">
  
  <!-- Vue.js -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
  <div id="app">
    <form @submit.prevent="enviarFormulario" class="formulario3" id="formulario3">

      <!-- Marca -->
      <div class="formulario3__grupo" :class="getClaseValidacion('marca')">
        <label for="marca" class="formulario3__label">Marca</label>
        <div class="formulario3__grupo_input">
          <input 
            type="text" 
            v-model="marca" 
            id="marca" 
            class="formulario3__input" 
            placeholder="Nike" 
            @input="validarCampo('marca')"
            @blur="marcarComoTocado('marca')"
            autocomplete="off">
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('marca')" v-show="tocado.marca"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.marca && marca && !valid.marca">La marca solo debe tener letras</p>
      </div>

      <!-- Talla -->
      <div class="formulario3__grupo" :class="getClaseValidacion('talla')">
        <label for="talla" class="formulario3__label">Talla</label>
        <div class="formulario3__grupo_input">
          <select v-model="talla" id="talla" class="formulario3__input" @change="validarCampo('talla'); marcarComoTocado('talla')">
            <option value="">Selecciona una talla</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('talla')" v-show="tocado.talla"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.talla && !valid.talla">Selecciona una talla</p>
      </div>

      <!-- Color -->
      <div class="formulario3__grupo" :class="getClaseValidacion('color')">
        <label for="color" class="formulario3__label">Color</label>
        <div class="formulario3__grupo_input">
          <input 
            type="text" 
            v-model="color" 
            id="color" 
            class="formulario3__input" 
            placeholder="Rojo" 
            @input="validarCampo('color')"
            @blur="marcarComoTocado('color')"
            autocomplete="off">
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('color')" v-show="tocado.color"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.color && color && !valid.color">El color solo debe tener letras</p>
      </div>

      <!-- Cantidad -->
      <div class="formulario3__grupo" :class="getClaseValidacion('cantidad')">
        <label for="cantidad" class="formulario3__label">Cantidad</label>
        <div class="formulario3__grupo_input">
          <input 
            type="number" 
            v-model="cantidad" 
            id="cantidad" 
            class="formulario3__input" 
            placeholder="100" 
            @input="validarCampo('cantidad')"
            @blur="marcarComoTocado('cantidad')"
            min="1"
            autocomplete="off">
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('cantidad')" v-show="tocado.cantidad"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.cantidad && cantidad && !valid.cantidad">La cantidad debe ser mayor a 0</p>
      </div>

      <!-- Precio -->
      <div class="formulario3__grupo" :class="getClaseValidacion('precio')">
        <label for="precio" class="formulario3__label">Precio</label>
        <div class="formulario3__grupo_input">
          <input 
            type="number" 
            v-model="precio" 
            id="precio" 
            class="formulario3__input" 
            placeholder="200" 
            @input="validarCampo('precio')"
            @blur="marcarComoTocado('precio')"
            min="0.01"
            step="0.01"
            autocomplete="off">
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('precio')" v-show="tocado.precio"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.precio && precio && !valid.precio">El precio debe ser mayor a 0</p>
      </div>

      <!-- Categoría -->
      <div class="formulario3__grupo" :class="getClaseValidacion('categoria')">
        <label for="categoria" class="formulario3__label">Categoría</label>
        <div class="formulario3__grupo_input">
          <select v-model="categoria" id="categoria" class="formulario3__input" @change="validarCampo('categoria'); marcarComoTocado('categoria')">
            <option value="">Selecciona una categoría</option>
            <option value="casual">Casual</option>
            <option value="formal">Formal</option>
            <option value="deportivo">Deportivo</option>
          </select>
          <i class="formulario3__validacion-estado fa-solid" :class="getClaseIcono('categoria')" v-show="tocado.categoria"></i>
        </div>
        <p class="formulario3__input_error" v-if="tocado.categoria && !valid.categoria">Selecciona una categoría</p>
      </div>

      <!-- Términos -->
      <div class="formulario3__grupo formulario3__grupo-terminos">
        <label>
          <input type="checkbox" v-model="terminos" class="formulario3__checkbox">
          Acepto los términos y condiciones
        </label>
      </div>

      <!-- Mensajes -->
      <div class="formulario3__mensaje" :class="{'formulario3__mensaje-activo': error}">
        <p><i class="fa-solid fa-triangle-exclamation"></i> Por favor, rellena correctamente todos los campos y acepta los términos</p>
      </div>

      <div class="formulario3__grupo formulario3__grupo-btn-enviar">
        <button type="submit" class="formulario3__btn">Confirmar</button>
        <p class="formulario3__mensaje-exito" :class="{'formulario3__mensaje-exito-activo': exito}">
          ✓ Formulario enviado exitosamente
        </p>
      </div>
    </form>
  </div>
<footer class="footer">
        <h4>Información</h4>
        <ul>
            <li><a href="mailto:lopezrochaangel30@gmail.com">Enviar correo</a></li>    
        </ul>
        <p>
            <a href="https://validator.w3.org/">
                <img src="../imagenes/valid-html40.png" alt="Valid html" style="border:0;width:88px;height:31px">
            </a>
        </p>
        <p>
            <a href="https://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Fjose-angel-lopez-rocha.github.io%2Fweb%2FConexion%2FCSS%2Fformularios.css&usermedium=all&vextwarning=&warning=1">
                <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">
            </a>
        </p>
        <p>
            <a href="https://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Fjose-angel-lopez-rocha.github.io%2Fweb%2FConexion%2FCSS%2Fformularios.css&usermedium=all&vextwarning=&warning=1">
                <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!">
            </a>
        </p>      
    </footer>
</div>

  <!-- JavaScript del formulario -->
  <script src="../js/formulario2.js"></script>
</body>
</html>
