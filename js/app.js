console.log('DOM READY !');

const btMenu = document.getElementById('btMenu');
const menu = document.getElementById('menu');
btMenu.addEventListener('click', ()=> {
    menu.classList.toggle("show");
})