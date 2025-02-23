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
