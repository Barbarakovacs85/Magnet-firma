
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbi Magnet</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/stylee.css">
</head>
<header>
    <a href="#" class="logo"><img src="../image/logo.png.png" alt="" width="120"></a>
    <div id="menu-bar"><i class="fa fa-bars"></i></div>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">Features</a>
        <a href="#about">About</a>
        <a href="#shop">Shop</a>
        <a href="#review">Review</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </nav>
   
    <div class="icon_icon">
        <a href="wishlist.php"><i class="fa fa-heart" style="font-size:30px; color:#000;"></i><sup style="font-size:35px; color:#000">0</sup></a>
        <a href="cart.php"><i class="fa fa-cart-arrow-down"style="font-size:30px; color:#000;" ></i><sup style="font-size:35px; color:#000">0</sup></a>
        <div class="fa fa-user" id="user-btn"style="font-size:30px;padding:15px;" ></div>
    </div> 
</header>

    -------------home-----------------
    
    <section class="slider-container" id="home">
        <div class="slider">
            <div class="slideBox active">
            <div class="textBox">
                <h1>Egyedi Hűtőmágnesek: <br> Varázsolj Pillanatokat Képekbe!</h1>
                <p>Készítsd el saját, egyedi hűtőmágnesedet, és rögzítsd az életed legszebb pillanatait!</p>
                <p>Te megtervezed én elkészítem.</p>
                <h2>Legyen az egy mosolygós családi fotó, egy vicces selfie, vagy egy fontos vállalati esemény emléke, ezek a hűtőmágnesek tökéletesen megőrzik és bemutatják az emlékeidet.</h2>
                <a href="menu.php" class="btn">add to cart</a>
            </div>
            <div class="imgBox">
                <img src="../image/product8.png">
            </div>
        </div>
        <div class="slideBox">
            <div class="textBox">
                <h1>Személyes ajándék: <br> Egyedülállú minden alkalomra</h1>
                <p>Adj egy kis varázslatot az ajándékozásnak egy saját fényképpel ellátott, egyedileg tervezett hűtőmágnestől! </p>
                <h2>Legyen az egy névnap, születésnap, esküvő vagy akár egy újszülött érkezése, ezek a hűtőmágnesek örökre megőrzik az emlékeidet, és mindenkit elbűvölnek a kreativitásoddal és figyelmeddel!</h2>
                <a href="menu.php" class="btn">add to cart</a>
            </div>
            <div class="imgBox">
                <img src="../image/huto.png">
            </div>
        </div>
        <div class="slideBox">
            <div class="textBox">
                <h1>Promóciós Hűtőmágnesek <br> Reklámozd Stílusosan és Egyedileg!</h1>
                <p>Törd meg a hagyományos reklámkampányok unalmát egyedi, céges logóval ellátott hűtőmágnesekkel!</p>
                <h2>Legyen az egy konferencia, vásár, vagy rendezvény, ezek a hűtőmágnesek nemcsak a hűtőszekrényeken, de az ügyfelek emlékezetében is helyet kapnak, hűsítve és emlékeztetve őket a te vállalkozásodra!</h2>
                <a href="menu.php" class="btn">add to cart</a>
            </div>
            <div class="imgBox">
                <img src="../image/product4.png">
            </div>
        </div>
        <ul class="controls">
            <div><li onclick="nextSlide();" class="next"> <i class="fa fa-mail-forward"></i></li>
            <div>
            <div><li onclick="prevSlide();" class="prev"> <i class="fa fa-mail-reply"></i></li></div>
        </ul>
    </div>
 <script>   
const imgBox = document.querySelector('.slider-container');
const slides = document.querySelectorAll('.slideBox');
let currentIndex = 0;
const intervalTime = 5000; // 5 másodperc

function nextSlide() {
    const currentSlide = slides[currentIndex];
    currentSlide.classList.remove('active');
    currentIndex = (currentIndex + 1) % slides.length;
    const nextSlide = slides[currentIndex];
    nextSlide.classList.add('active');
}

function prevSlide() {
    const currentSlide = slides[currentIndex];
    currentSlide.classList.remove('active');
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    const prevSlide = slides[currentIndex];
    prevSlide.classList.add('active');
}

function startSlideshow() {
    setInterval(nextSlide, intervalTime);
}

startSlideshow(); 

</script>
</section>



    <section class="usage" id="features">
        <h1 class="heading">How it Work</h1>
            <div class="row">
                <div class="box-container">
                    <div class="box">
                        <div class="maschine">
                            <img src="../image/drucker.jpg" alt="epson">
                            <h3>Fotodruck</h3>
                            <p>Als Erstes prüfe ich die in der Bestellung angegebenen Fotos. Wenn alles in Ordnung ist, drucke ich sie auf Fotopapier aus.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="cuter">
                            <img src="../image/cuter.png.png" alt="cuter maschine">
                            <h3>Schneidemaschine</h3>
                            <p>Der zweite Schritt besteht darin, die Fotos mit einem speziellen Werkzeug in die richtige Form zu schneiden.</p>
                        </div>
                    </div>
                    <img class="divider" src="../image/product.png" alt="" >
                    <div class="box-container">
                        <div class="box">
                            <div class="presser">
                                <img src="../image/maschine.png" alt="maschine">
                                <h3>Magnetdruck</h3>
                                <p>Bereite ich die Magnetkomponenten vor, lege sie in die Druckmaschine und mit zwei Drücken entsteht der Grundmagnet.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="magnet">
                                <img src="../image/kleber.png" alt="kleber magnet">
                                <h3>Magnetklebung</h3>
                                <p>Als letzten Schritt klebe ich die starke Magnetfolie auf die Rückseite. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="../image/about.png" alt="">
            </div>
            <div class="content">
                <h3>Take a Look Around Our shop</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, laudantium.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, laudantium a obcaecati animi minima quis.</p>
                <div class="buttons">
                    <a href="#" class="btn">Shop now</a> 
                    <a href="#" class="btn">Read More</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="shop" id="shop">
        <h1 class="heading">Our latest products</h1>
        <div class="row">
            <div class="card">
                <img src="../image/product5.jpg" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Fridge Magnet 6st.</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">10fr.-</div>
            </div>
            <div class="card">
                <img src="../image/product8.png" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Fridge Magnet 12st.</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">35fr.-</div>
            </div>
            <div class="card">
                <img src="../image/product (2).png" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Fridge Magnet 9st.</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">28fr.-</div>
            </div>
           
            <div class="card">
                <img src="../image/product7.jpg" style="height:70%; width:70%" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Fridge Magnet 6st.</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">10fr.-</div>
            </div>
            <div class="card">
                <img src="../image/product4.png" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Fridge Magnet 6st.</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">10fr.-</div>
            </div>
            <div class="card">
                <img src="../image/product6.webp" alt="">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-cart-plus"></i>
                    <i class="fa fa-exe"></i>
                </div>
                <div class="name">
                    <h3>Speciell Magnet</h3>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="price">Preis Auf Anfrage</div>
            </div>
        </div>
</section>
<section class="blog" id="blog">
    <h1 class="heading">Our blog</h1>
        <div class="box-container">
            <div class="box">
                <div class="img-box" style=" background: rgba(255,255,255, 0.03);
                border: 2px solid #dcdcdc;
                backdrop-filter:blur(11px);
                box-shadow: 0 20px 50px rgba(40, 113, 85, 0.4);">
                    <img src="../image/product (2).png" alt="">
                </div>
                <div class="detail">
                    <div class="date">
                        <span>Magnet</span>
                        <p>1/03/2-23</p>
                    </div>
                        <h1>fridge Magnet Persönlich details</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, libero quidem corrupti aspernatur ex ullam!</p>
                        <a href="" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../image/product5.jpg" alt="">
                </div>
                <div class="detail">
                    <div class="date">
                        <span>Magnet</span>
                        <p>1/03/2-23</p>
                    </div>
                        <h1>fridge Magnet Persönlich details</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, libero quidem corrupti aspernatur ex ullam!</p>
                        <a href="" class="btn">read more</a>
                </div>
            </div>
            <div class="box">
                <div class="img-box">
                    <img src="../image/product8.png" alt="">
                </div>
                <div class="detail">
                    <div class="date">
                        <span>Magnet</span>
                        <p>1/03/2-23</p>
                    </div>
                        <h1>fridge Magnet Persönlich details</h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, libero quidem corrupti aspernatur ex ullam!</p>
                        <a href="" class="btn">read more</a>
                </div>
            </div>
        <div> 
</section>









<section class="contact" id="contact">
    <h1 class="heading">get in touch</h1>
    <div class="box-container">
        <div class="box">
            <img src="../image/huto.png" alt="">
        </div>
        <form action="" class="contacted">
            <div class="input-field">
                <input type="text" id="name">
                <label for="name">Name</label>
            </div>
            <div class="input-field">
                <input type="text" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="text" id="number">
                <label for="number">Number</label>
            </div>
            <div class="input-field">
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <label for="message">Message</label>
            </div>
            <input type="submit" class="btn" value="Send Message">
        </form>
    </div>
</section>

<script src="../js/script.js"></script>
</body>
</html>