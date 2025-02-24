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


function Sign(){
    const LoginForm = document.querySelector('.LoginForm');
    const RegisterForm = document.querySelector('.RegisterForm');
    const LoginLink = document.querySelector('.LoginLink');
    const RegisterLink = document.querySelector('.RegisterLink');

    RegisterLink.onclick=()=>{
        RegisterForm.classList.add('active');
    }
}

