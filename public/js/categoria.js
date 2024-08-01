let imagen1 = document.getElementById("imagen_1")
let imagen2 = document.getElementById("imagen_2")
let imagen3 = document.getElementById("imagen_3")
let imagen4 = document.getElementById("imagen_4")
let imagen5 = document.getElementById("imagen_5")
let imagen6 = document.getElementById("imagen_6")
let imagen7 = document.getElementById("imagen_7")
let imagen8 = document.getElementById("imagen_8")
let imagen9 = document.getElementById("imagen_9")
let imagen10 = document.getElementById("imagen_10")
let imagen11 = document.getElementById("imagen__11")
let imagen12 = document.getElementById("imagen__12")
let imagen13 = document.getElementById("imagen__13")
let overlay = document.getElementById("overlay")
let x = document.getElementById("x")
let i = 0











imagen1.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[0].style.opacity = "1"
i =0


})


imagen2.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[1].style.opacity = "1"
i =1





})



imagen3.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[2].style.opacity = "1"
i =2


})

imagen4.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[3].style.opacity = "1"
i =3


})

imagen5.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[4].style.opacity = "1"
i =4


})

imagen6.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[5].style.opacity = "1"
i =5


})


imagen7.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[6].style.opacity = "1"
i =6


})


imagen8.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[7].style.opacity = "1"
i =7


})


imagen9.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[8].style.opacity = "1"
i =8


})

imagen10.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[9].style.opacity = "1"
i =9


})

imagen11.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[10].style.opacity = "1"
i =10


})


imagen12.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[11].style.opacity = "1"
i =11


})
imagen13.addEventListener("click", (e) => {

    overlay.classList.add("aparece")
    document.getElementsByClassName("overlay__img")[12].style.opacity = "1"
i =12


})



document.getElementById("isquierda").addEventListener("click", function (e) {
    e.preventDefault()

    if (i == 0) {

        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        
        document.getElementsByClassName("overlay__img")[11].style.opacity = "1"
        i=11

    } else {

        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        i--
        document.getElementsByClassName("overlay__img")[i].style.opacity = "1"
    }

})








document.getElementById("derecha").addEventListener("click", function (e) {
    e.preventDefault()
    // document.getElementsByClassName("overlay__img")[1].style.transition="opacity 2s linear";
    if(i<11){
    document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
    i++
    console.log(i)
    document.getElementsByClassName("overlay__img")[i].style.opacity = "1"}

    
   else if (i == 12) {
        
        document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
        i = 0
        console.log(i)
       
        document.getElementsByClassName("overlay__img")[i].style.opacity = "1"

      

    } 
 
})

















x.addEventListener("click", (e) => {
    e.preventDefault()
    overlay.classList.remove("aparece")
    document.getElementsByClassName("overlay__img")[i].style.opacity = "0"
    
    console.log(i)
})