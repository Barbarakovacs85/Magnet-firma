
// oldalsó menü kezelése
const burger = document.getElementById('burger')
const nav = document.getElementById('nav')

//klikkre css osztályokat cserélünk
burger.addEventListener('click', function (event){
    nav.classList.toggle('menu-active')
    burger.classList.toggle('fi-align-justify')
    burger.classList.toggle('fi-arrow-left')
})

//Termékek beillesztése
// TODO ez általában a backendről jön
const products = [
    {
        id: 10,
        name: ' Magnet',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 9,
        instock: true
    },
    {
        id: 11,
        name: ' Magnet 6stück',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 15,
        instock: true
    },
    {
        id: 12,
        name: ' Magnet 6stück',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 15,
        instock: true
    },
    {
        id: 13,
        name: ' Magnet',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 9,
        instock: true
    },
    {
        id: 14,
        name: ' Magnet',
        picture: 'magnet.jpp',
        descrioption: 'Verschidene product für Uns',
        price: 9,
        instock: true
    },
    {
        id: 15,
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
<a id="${product.id}" class="addToCart">Bestellen</a>
</div>`
})

//Kosárkezelés
const cart = {}

// gyűjtsók ki az addToCart css klassú elemeket
const addToCartButtons = document.getElementsByClassName('addToCart')

//nézzük meg hány darab van belőle
const buttonCount = addToCartButtons.length

//lépeseggünk végig rajta
for(let i = 0;i < buttonCount; i++){

    //adjunk hozzájuk egyesével egy click figyelőt
    addToCartButtons[i].addEventListener('click', function (event) {
        // ha még nincs benne a kosárban akkor adjuk hozzá egy darabbal
        if (cart[event.target.id] == undefined) {
            cart[event.target.id] = 1
        } else {
            //ha már benne van akkor növeljük a darabszámot
            cart[event.target.id]++
        }  
    })
}

// tegyünk réá egy click figyelőt a kosár iconra
// jelenítsük meg ami a kosárban van
//lépesgessünk végig a cart-on és a products tömbből keressük ki a szóban forgó terméket és jelenítsük meg a nevét , a cart-ban lévő darabszámot és a termék árát
// a végén jelenítsük meg a teljes vásárlási összeget