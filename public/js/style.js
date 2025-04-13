function stickyNav() {
    var navbar = document.querySelector("nav");
    var scrollValue = window.scrollY;

    if (scrollValue >= 76) {
        navbar.classList.add("header-sticky");
    } else {
        navbar.classList.remove("header-sticky");
    }
}

window.addEventListener("scroll", stickyNav);


document.addEventListener("DOMContentLoaded", function () {
    const LoginForm = document.querySelector('.LoginForm');
    const RegisterForm = document.querySelector('.RegisterForm');
    const LoginLink = document.querySelector('.LoginLink');
    const RegisterLink = document.querySelector('.RegisterLink');

    RegisterLink.addEventListener("click", function (e) {
        e.preventDefault(); // Megakadályozza az újratöltést
        RegisterForm.classList.add('active');
        LoginForm.classList.add('active');
    });

    LoginLink.addEventListener("click", function (e) {
        e.preventDefault(); // Megakadályozza az újratöltést
        RegisterForm.classList.remove('active');
        LoginForm.classList.remove('active');
    });
});


document.getElementById('foglalasdiv').style.visibility = "hidden";
function Foglalas(){
    document.getElementById('foglalasdiv').style.visibility = "visible";
}

// let eyeicon = document.getElementById('eyeicon');
// let password = document.getElementById('password1');

// eyeicon.onclick = function(){
//     if(password.type == "password"){
//         password.type = "text";
//         eyeicon.src = "{{asset('img/visibility_off.png')}}";
//     }
//     else{
//         password.type = "password";
//         eyeicon.src = "{{asset('img/visibility.png')}}";
//     }
// }
