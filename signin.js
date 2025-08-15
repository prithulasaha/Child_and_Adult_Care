const wrapper =document.querySelector('.wrapper');
const loginLink =document.querySelector('.login-link');
const registerLink =document.querySelector('.register-link');


registerLink.addEventListener('click', ()=>{
    wrapper.classList.add('active');
});


loginLink.addEventListener('click', ()=>{
    wrapper.classList.remove('active');
});


let eye = document.getElementById("eye");
let password = document.getElementById("password");
eye.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
    }
    else{
        password.type = "password";
    }
}



var emailField = document.getElementById("email-field");
var emailLabel = document.getElementById("email-label");
var emailError = document.getElementById("email-error");

    function validateEmail(){
        emailLabel.style.bottom = "-45px";

        if(!emailField.value.match(/^[A-za-z\._\-0-9]*[@][gmail\yahoo]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML = "Please enter a valid email";
            emailError.style.top = "120%";
            emailField.style.borderBottomColor = "red";
            return false;

        }

        emailError.innerHTML = "";
        emailField.style.borderBottomColor = "black";
        emailError.style.top = "100%";
        return true;
    }













