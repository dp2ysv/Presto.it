// Catture

let navSearchbar = document.querySelector('#navSearchbar');
let navSearchBtn = document.querySelector('#navSearchBtn');

// Script barra di ricerca

navSearchbar.addEventListener('mouseenter', () => {
    navSearchbar.style.transition = '0.7s';
    navSearchbar.style.width = '500px';
})

navSearchbar.addEventListener('mouseleave', () => {
    if (document.activeElement != navSearchbar){
    navSearchbar.style.transition = '0.7s';
    navSearchbar.style.width = '250px';
    }
}) 

navSearchbar.addEventListener('focusout', () => { 
    navSearchbar.style.transition = '0.7s';
    navSearchbar.style.width = '250px';
}) 