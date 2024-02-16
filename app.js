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
        picture: 'magnet2.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 15,
        instock: true
    },
    {
        name: ' Magnet 9stück',
        picture: 'magnet3.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 25,
        instock: true,
        variation: ['klein', 'gross']
    }
]

const productsSection = document.getElementById('products')
productsSection.innerHTML = `<div>
<h2>${products[0].name}</h2>
<p>${products[0].descrioption}</p>
<img src="./magnet.jpg"/${products[0].picture}>
<h3>${products[0].price} Fr.-</h3>
</div>`