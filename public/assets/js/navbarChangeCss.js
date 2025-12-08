
function navbarChangeCSS() {
    window.addEventListener("scroll", (e) => {
        var navbar = document.getElementById("navbar")
        var navbarCenter = document.getElementById("navbar-center")
        if (window.scrollY >= 200) {
            navbarCenter.classList.remove("ch-bg-transparent")
            navbar.classList.remove("ch-bg-transparent")
            navbar.classList.remove("ch-color-white")
            navbar.classList.remove("absolute")
            navbar.classList.add("animate__animated")
            navbar.classList.add("animate__fadeInDown")
            navbar.classList.add("fixed")
        } else {
            navbarCenter.classList.add("ch-bg-transparent")
            navbar.classList.add("ch-bg-transparent")
            navbar.classList.add("ch-color-white")
            navbar.classList.add("absolute")
            navbar.classList.remove("animate__animated")
            navbar.classList.remove("animate__fadeInDown")
            navbar.classList.remove("fixed")
        }
    })
}

navbarChangeCSS()

