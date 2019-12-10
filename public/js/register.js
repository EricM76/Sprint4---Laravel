

window.onload = function (){

  let formulario = document.forms[0];
  let elementos = formulario.elements;
  let inputs = document.querySelectorAll('input');

  let inputNombre = elementos[1];
  let inputApellido = elementos[2];
  let inputEmail = elementos[3];
  let inputContra = elementos[4];
  let inputConfirm = elementos[5];
  let inputDate = elementos[6];
  // Hace referencia a los p debajo de los imputs
  let errorNomb = document.getElementById('errorNomb');
  let errorAp = document.getElementById('errorAp');
  let errorEmail = document.getElementById('errorEm');
  let errorContra = document.getElementById('errorCon');
  let errorConfirm = document.getElementById('errorConCon');
  let errorDate = document.getElementById('errorDate');

  // let emailRegex = (/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/);
  // let contraRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
  // let dateRegex = ^(?:3[01]|[12][0-9]|0?[1-9])([\-/.])(0?[1-9]|1[1-2])\1\d{4}$

  formulario.onsubmit = function(evento){
    for (input of inputs) {
      if (input.getAttribute('class') == 'form-control is-invalid') {
        evento.preventDefault();
  console.log(input)
      }

    }
    formulario.submit;
  }

  inputNombre.onchange = function (){
    if (inputNombre.value.length <= 1) {
      inputNombre.setAttribute('class', 'form-control is-invalid');
      var mensajeNomb = document.createTextNode("Tu nombre es invalido");
      errorNombr.appendChild(mensajeNomb);
    } else {
      inputNombre.setAttribute('class', 'form-control is-valid');
      var mensajeNomb = document.createTextNode("");
      errorNombr.appendChild(mensajeNomb);
    }
  }

  inputApellido.onchange = function (){
    if (inputApellido.value.length <= 2) {
      inputApellido.setAttribute('class', 'form-control is-invalid');
      var mensajeAp = document.createTextNode("Tu apellido es invalido");
      errorAp.appendChild(mensajeAp);
    } else {
      inputApellido.setAttribute('class', 'form-control is-valid');
      var mensajeAp = document.createTextNode("");
      errorAp.appendChild(mensajeAp);
    }
  }

  inputEmail.onchange = function(){
    if (emailRegex.test(inputEmail.value) == false) {
      inputEmail.setAttribute('class', 'form-control is-invalid');
      var mensajeEm = document.createTextNode("Tu email es invalido");
      errorEm.appendChild(mensajeEm);
    } else {
      inputEmail.setAttribute('class', 'form-control is-valid');
      var mensajeEm = document.createTextNode("");
      errorEm.appendChild(mensajeEm);
    }
  }

  inputContra.onchange = function(){
    if (contraRegex.test(inputContra.value) == false) {
      inputContra.setAttribute('class', 'form-control is-invalid');
      var mensajeCon = document.createTextNode("Tu contraseña es invalida");
      errorContra.appendChild(mensajeCon);
    } else {
      inputContra.setAttribute('class', 'form-control is-valid');
      var mensajeCon = document.createTextNode("");
      errorContra.appendChild(mensajeCon);
    }
  }

  inputConfirm.onchange = function(){
    if (inputContra.value != inputConfirm.value) {
      inputConfirm.setAttribute('class', 'form-control is-invalid');
      var mensajeConf = document.createTextNode("Las contraseñas no coinciden");
      errorConfirm.appendChild(mensajeConf);
    } else {
      inputConfirm.setAttribute('class', 'form-control is-valid');
      var mensajeConf = document.createTextNode("");
      errorContra.appendChild(mensajeConf);
    }
  }






}
