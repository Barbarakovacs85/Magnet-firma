const burger = document.getElementById('burger')
const nav = document.getElementById('nav')

burger.addEventListener('click', function (event){
    nav.classList.toggle('menu-active')
})