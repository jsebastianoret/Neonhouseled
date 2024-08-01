

let catalogo=document.getElementById("catalogo")
let inicial=document.getElementById("inicial")
let x=document.getElementById("x_1")
let overlay1=document.getElementById("form_1")
let i = 0


catalogo.addEventListener("click",(e)=>{
    e.preventDefault()
    overlay1.classList.add("aparece")
overlay1.style.pointerEvents="initial"

})

x.addEventListener("click",(e)=>{
    e.preventDefault()
    
    overlay1.classList.remove("aparece")
    overlay1.style.pointerEvents="none"
    inicial.style.opacity="1"
})





document.getElementById("isquierda").addEventListener("click", function (e) {
    e.preventDefault()

    if (i == 0) {

        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        
        document.getElementsByClassName("overlay__img")[1].style.opacity = "1"
        i=1

    } else {

        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        i--
        document.getElementsByClassName("overlay__img")[i].style.opacity = "1"
    }

})








document.getElementById("derecha").addEventListener("click", function (e) {
    e.preventDefault()
    // document.getElementsByClassName("overlay__img")[1].style.transition="opacity 2s linear";
    if(i<1){
    document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
    i++
    console.log(i)
    document.getElementsByClassName("overlay__img")[i].style.opacity = "1"}

    
   else if (i == 1) {
        
        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        i = 0
        console.log(i)
       
        document.getElementsByClassName("overlay__img")[i].style.opacity = "1"

      

    } 
 
})

















