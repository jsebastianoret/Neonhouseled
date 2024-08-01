const openModalButton = document.getElementById('openModalButton');
const modal = document.getElementById('modal');
const close = document.getElementById('cerrar');

openModalButton.addEventListener('click', () => {
    modal.style.opacity = '1';
    modal.style.pointerEvents = 'auto'; 
});

close.addEventListener('click', () => {
    
    modal.style.opacity = '0';
    modal.style.pointerEvents = 'none'; 
});


document.getElementById("openModalButton").addEventListener("click", function() {
    document.getElementById('modal').style.display = 'block';
});






/*
const open = document.getElementById('catalogo');
const modal = document.getElementById('modal');
const openModalButton = document.getElementById('openModalButton');
const close = document.getElementById('cerrar');
const close2 = document.getElementById('cerrar2');

open.addEventListener('click', () => {
    modal.classList.remove('down');
});

close.addEventListener('click', () => {
    modal.classList.add('down');
});

close2.addEventListener('click', () => {
    modal.classList.add('down');
});*/