const menuButton = document.querySelector('.burger-button');
const menu = document.querySelector('.menu');

function ShowHideMenu(){
    if(menu.classList.contains('is-active')){
        menu.classList.remove('is-active');
    }
    else{
        menu.classList.add('is-active');
    }
}
menuButton.addEventListener('click', ShowHideMenu);

// Desplegar submenu 1
const displayfirstbutton = document.querySelector('.parent-first');
const firstoption_firstmenu = document.querySelector('.hidden-desk.first');
const secondoption_firstmenu = document.querySelector('.hidden-desk.second');

function ShowHideFirst(){
    if(firstoption_firstmenu.classList.contains('is-active')){
        firstoption_firstmenu.classList.remove('is-active');
        secondoption_firstmenu.classList.remove('is-active');
    }
    else{
        firstoption_firstmenu.classList.add('is-active');
        secondoption_firstmenu.classList.add('is-active');
    }
}
displayfirstbutton.addEventListener('click', ShowHideFirst);

// Desplegar submenu 2
const displaysecondbutton = document.querySelector('.parent-second');
const firstoption_secondmenu = document.querySelector('.hidden-desk.third');
const secondoption_secondmenu = document.querySelector('.hidden-desk.fourth');

function ShowHideSecond(){
    if(firstoption_secondmenu.classList.contains('is-active')){
        firstoption_secondmenu.classList.remove('is-active');
        secondoption_secondmenu.classList.remove('is-active');
    }
    else{
        firstoption_secondmenu.classList.add('is-active');
        secondoption_secondmenu.classList.add('is-active');
    }
}
displaysecondbutton.addEventListener('click', ShowHideSecond);