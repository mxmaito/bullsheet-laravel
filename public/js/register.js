window.onload=function(){
var registerForm = document.forms[0]
let register= document.querySelector('form')
console.log(register)

register.elements.first_name.focus();
console.log(register.elements.first_name.value);

registerForm.onsubmit = function(evento) {
        if (!validateRegisterForm()) {
      evento.preventDefault()
    }else{
      registerForm.submit()
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
        let errorUserName = document.getElementById('errorNombreUsuario');
        if (username.value.length < 6){
          errorUserName.innerHTML = "Nombre de usuario no puede tener menos de 6 digitos";
          errorUserName.classList.add('alert-danger');
          username.classList.add('is-invalid');
          return false;
        } else{
          errorUserName.innerHTML = "";
          errorUserName.classList.remove('alert-danger');
          username.classList.remove('is-invalid');
          username.classList.add('is-valid');
          formulario.elements.termsCondition.focus();
          return true;
        }
}
