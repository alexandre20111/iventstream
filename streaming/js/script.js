
function navbar(){
    const burger = document.querySelector(".burger")
    const nav = document.querySelector("nav")
    const body = document.querySelector("body")

    burger.addEventListener("click", function(){
        nav.classList.toggle("visible")
        body.classList.toggle("back")
    })
    
}

navbar()
