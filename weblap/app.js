
// oldalsó menü kezelése
const burger = document.getElementById('burger')
const nav = document.getElementById('nav')
//klikkre css osztályokat cserélünk
burger.addEventListener('click', function (){
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

const cart = {

}

const addToCart = (event) => {
    //nézzük meg ,hogy a kosárban gombot nyomtuk meg (van id), vagy a plusz gombot (nincs id)
   
//    let target = event.target.dataset.id 
//     if(event.target.id) {
//         target = event.target.id
//     }
    //ternary operator

    let target = event.target.id ? event.target.id : event.target.datset.id
        
    // ha még nincs benne a kosárban akkor adjuk hozzá egy darabbal
    if (cart[target] == undefined) {
        cart[target] = 1
    } else {
        //ha már benne van akkor növeljük a darabszámot
        cart[target]++
    }  
}

const refreshCartItems = () => {
//jelenlegi cart-items tartalom kiürítése

cartItems.innerHTML = ''
//totál nullázása
let total = 0
//lépegessünk végig a cart-on és products tömbből keressük ki a szóban forgó terméket

for (const id in cart) {
    // és jelenítsük meg a nevét, a cartban lévő darabszámot, és a termék árát
    const currentProduct = products.find(product => product.id == id)
    cartItems.innerHTML += `<li>
    <button data-id="${currentProduct.id}">+</button>
    ${cart[id]} db - ${currentProduct.name} * ${currentProduct.price} Fr/Stück
    </li>`
   // adjuk hozá ennek az értéket a teljes összeghez
   total += currentProduct.price * cart[id]
}
//a végén jelenítsük meg a teljes vásárlási összeget
cartItems.innerHTML += `<li>Zusammen: ${total.toLocaleString()} Fr.-</li>`
}

// gyűjtsók ki az addToCart css klassú elemeket
const addToCartButtons = document.getElementsByClassName('addToCart')
//nézzük meg hány darab van belőle
const buttonCount = addToCartButtons.length
//lépeseggünk végig rajta
for(let i = 0;i < buttonCount; i++){
    
    //adjunk hozzájuk egyesével egy click figyelőt
    addToCartButtons[i].addEventListener('click', addToCart) 
}

 const cartIcon = document.getElementById('cart-icon')
 const cartContent = document.getElementById('cart-content')
 const cartItems = document.getElementById('cart-items')

//tegyünk rá egy klikk figyelőt 
 cartIcon.addEventListener('click', function () {
    // jelenítsük meg ami a kosárban van
    cartContent.classList.toggle('active')
    refreshCartItems()
 })

//tegyük rá a  "+" klikk figyelőt a kosárba helyezéssel
// event delegeation

cartItems.addEventListener('click', (event) => {
    addToCart(event)
    refreshCartItems()
})
 