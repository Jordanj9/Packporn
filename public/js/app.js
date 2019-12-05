const menu = document.getElementById('menu');
let band  = false;

menu.addEventListener('click', function(event){
    event.preventDefault();
    const nav = document.querySelector('.menu');
    if(band){
        nav.style.width = '0%';
        band = false;
    }else{
        nav.style.width = '50%';
        band = true;
    }
});
