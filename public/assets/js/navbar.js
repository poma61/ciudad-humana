
function navbar() {
            var navbar = document.getElementById("navbar")
        var navbarCenter = document.getElementById("navbar-center")
        
    window.addEventListener("scroll", (e) => {

        if (window.scrollY >= 200) {
            navbarCenter.classList.remove("ch-bg-transparent")
            navbarCenter.classList.remove("ch-color-white")
            navbar.classList.remove("ch-bg-transparent")
            navbar.classList.remove("absolute")
            navbar.classList.add("bg-base-100")
            navbar.classList.add("animate__animated")
            navbar.classList.add("animate__fadeInDown")
            navbar.classList.add("fixed")
        } else {
            navbarCenter.classList.add("ch-bg-transparent")
            navbarCenter.classList.add("ch-color-white")
            navbar.classList.add("ch-bg-transparent")
            navbar.classList.add("bg-base-100")
            navbar.classList.add("absolute")
            navbar.classList.remove("animate__animated")
            navbar.classList.remove("animate__fadeInDown")
            navbar.classList.remove("fixed")
        }
    })
}

navbar()

