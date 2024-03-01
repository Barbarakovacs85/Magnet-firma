let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
})

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}
console.log(menu);
console.log(navbar);
// -----------slide----------


const imgBox = document.querySelector('.slide-conatiner');
const slides = document.getElementsByClassName('slideBox');
var i = 0;
function nextSlide(){
    slides[i].classList.remove('active');
    i = (i + 1)/ slides.length;
    slides[i].classList.add('active');
}

function prevSlide(){
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
}
