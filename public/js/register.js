window.onload=function(){

//var registerForm = document.forms[0]
let register= document.querySelector('.formRegister')
console.log(register.elements.first_name)

register.elements.first_name.focus();
//console.log(register.elements.first_name.value);
register.addEventListener('submit',validar);

function validar(evento) {
console.log("hola");
    if (!validateRegisterForm()) {
      evento.preventDefault()
    }else{

      register.submit()
    }
  }

  function validateRegisterForm() {

    let { first_name,last_name, email,password,password_confirmation} = formulario.elements

    if (!validateName(first_name)) return false;
    if (!validateLastName(last_name)) return false;
    if (!validateEmail(email)) return false;
    if (!validatePassword(password)) return false;
    if (!validatePasswordRepeat(password, password_confirmation)) return false;

    return true;
    }

    function validateName(first_name) {
        console.log("Hola");
        let errorName = document.getElementById('errorNombre');
        if (first_name.value.length < 1){
          errorName.innerHTML = "Por favor complete el campo Nombre";
          errorName.classList.add('alert-danger');
          first_name.classList.add('is-invalid');
          return false;
        } else{
          errorName.innerHTML = "";
          errorName.classList.remove('alert-danger');
          first_name.classList.remove('is-invalid');
          first_name.classList.add('is-valid');
          formulario.elements.last_name.focus();
          return true;
        }
}

function validateLastName(last_name) {
    let errorLastName = document.getElementById('errorApellido');
    if (last_name.value.length < 1){
      errorLastName.innerHTML = "Por favor complete el campo Nombre";
      errorLastName.classList.add('alert-danger');
      last_name.classList.add('is-invalid');
      return false;
    } else{
      errorLastName.innerHTML = "";
      errorLastName.classList.remove('alert-danger');
      last_name.classList.remove('is-invalid');
      last_name.classList.add('is-valid');
      formulario.elements.email.focus();
      return true;
    }
}

function validateEmail(email) {
    let re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    let error = document.getElementById('errorEmail');


    if (!re.test(email.value)){

      email.classList.add('is-invalid');
      console.log(error);
      error.innerHTML= "Debe colocar un email válido";
      error.classList.add('alert-danger');
      //errorEmail.classList.add('alert-danger');
     // email.addEventListener('change',cambioNombre);
    return false
  }else{
    error.innerHTML= "";
    error.classList.remove('alert-danger');
    email.classList.remove('is-invalid');
    email.classList.add('is-valid');
    formulario.elements.password.focus()
    return true;
  }
}
}
