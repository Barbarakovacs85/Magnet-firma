const burger = document.getElementById('burger')
const nav = document.getElementById('nav')

//klikkre css osztályokat cserélünk
burger.addEventListener('click', function (event){
    nav.classList.toggle('menu-active')
    burger.classList.toggle('fi-align-justify')
    burger.classList.toggle('fi-arrow-left')
})

const products = [
    {
        name: ' Magnet',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 9,
        instock: true
    },
    {
        name: ' Magnet 6stück',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 15,
        instock: true
    },
    {
        name: ' Magnet 9stück',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 25,
        instock: true,
        variation: ['klein', 'gross']
    }
]

const productsSection = document.getElementById('products')

 products.forEach(product =>{
productsSection.innerHTML += `<div>
<h2>${product.name}</h2>
<p>${product.descrioption}</p>
<img src="./magnet.jpg"/${product.picture}>
<h3>${product.price} Fr.-</h3>
<a href="#">Bestellen</a>
</div>`})