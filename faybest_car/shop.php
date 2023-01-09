<!DOCTYPE html>
<?php
@include 'Database/config.php';
@include 'Database/select.php';
@include 'Database/search.php';
?>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/shop.css">
   <title>Shop</title>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   <div class="container_head">
      <header>
         <nav class="one">
            <div class="phone">
               <a><i class="fa-solid fa-phone"></i></a>
               <span>+213551462476</span>
            </div>
            <div class="email">
               <a><i class="fa-solid fa-envelope"></i></a>
               <span>shop@faybest.com</span>
            </div>
            <div class="Day">
               <a><i class="fa-solid fa-clock"></i></a>
               <span>Mon-Sun: 8:00am - 6:00pm</span>
            </div>
            <div class="icon">
               <a href="#"><i class="fa-brands fa-facebook"></i></a>
               <a href="#"><i class="fa-brands fa-twitter"></i></a>
               <a href="#"><i class="fa-brands fa-github"></i></a>
               <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
         </nav>
         <nav class="two">
            <img src="image/1.png" alt="" width="220px" height="170px">
            <ul>
               <li>
                  <a href="">
                     <span>HOME</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>FUATERED PRODUCT</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>COLLECTION</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>SHOP</span>
                  </a>
               </li>
               <li>
                  <a href="">
                     <span>CONTACT</span>
                  </a>
               </li>
               <li>
                  <form action="database/search.php" method="POST">
                     <input type="text" class="totosearch" name="totosearch" placeholder="Search..." />
                     <input type="submit" name="tosearch" value="Search" id="tosearch">
                  </form>
               </li>
               <li class="button_menu">
                  <div id="container" onclick="myMove(this)">
                     <div class="bar1"></div>
                     <div class="bar2"></div>
                     <div class="bar3"></div>
                  </div>
                  <div id="textformenu">
                     <div class="buttonforside">
                        <p>Home</p>
                        <p>FUATERED PRODUCT</p>
                        <p>COLLECTION</p>
                        <p>SHOP</p>
                        <p>CONTACT</p>
                     </div>
                     <div class="textinfo">
                        <h2>+213551462476</h2>
                        <h2>faybest@gmail.com</h2>
                        <h2>Algeria-Djelfa-Zian_Achour</h2>
                     </div>
                  </div>
               </li>
            </ul>
         </nav>
      </header>
   </div>
   <div class="container_body">
      <div class="img-defintion">
         <img src="image/Click-To-Buy-New .jpg" alt="imagehunday">
         <div class="text-defintion">
            <h2>Shop Car </h2>
            <p>Here You Finde all kinde of cars and all type</p>
         </div>
      </div>
      <div class="select_form">
         <h3>Select Here Type of Your Dream Car</h3>
         <select name="one" id="year" require>
            <option value="" disabled selected hidden>Year</option>
            <option value="">2012</option>
            <option value="">2013</option>
            <option value="">2014</option>
            <option value="">2015</option>
            <option value="">2016</option>
            <option value="">2017</option>
            <option value="">2018</option>
            <option value="">2019</option>
            <option value="">2020</option>
            <option value="">2021</option>
         </select>
         <select name="two" id="type" placeholder="Mile">
            <option value="" disabled selected hidden>Mile</option>
            <option value="">0km - 100km</option>
            <option value="">100km - 500km</option>
            <option value="">500km - 1000km</option>
            <option value="">1000km - 5000km</option>
            <option value="">5000km - 90000km</option>
         </select>
         <select name="three" id="brand" placeholder="Brand">
            <option value="" disabled selected hidden>Brand</option>
            <option value="">BMW</option>
            <option value="">Hunday</option>
            <option value="">Mersedece</option>
            <option value="">Ford</option>
            <option value="">Audi</option>
         </select>
         <select name="four" id="price" placeholder="Price Range">
            <option value="" disabled selected hidden>Price Range</option>
            <option value="">1,000,000 DZD - 2,000,000 DZD </option>
            <option value="">2,000,000 DZD - 3,000,000 DZD</option>
            <option value="">4,000,000 DZD - 5,000,000 DZD</option>
            <option value="">6,000,000 DZD - 7,000,000 DZD</option>
            <option value="">8,000,000 DZD - 9,000,000 DZD</option>
            <option value="">10,000,000 DZD - 11,000,000 DZD</option>
            <option value="">12,000,000 DZD - 13,000,000 DZD</option>
         </select>
         <select name="five" id="locaiton" placeholder="Location">
            <option value="" disabled selected hidden>Location</option>
            <option value="">Laghouat</option>
            <option value="">Djelfa</option>
            <option value="">Oran</option>
            <option value="">Annaba</option>
            <option value="">Alger</option>
            <option value="">Constontine</option>
            <option value="">Tbesa</option>
            <option value="">Msila</option>
            <option value="">Ghardaia</option>
            <option value="">Adrar</option>
         </select>
         <select name="six" id="transmission" placeholder="Transmission">
            <option value="" disabled selected hidden>Transmission</option>
            <option value="">Automatique</option>
            <option value="">Manuale</option>
         </select>
         <br>
         <input type="submit" value="search" name="search" id="search" style="width: 271px;
   height: 33px;
   position: relative;
   background-color: #4587c5;
   font-family: var(--font-family3);
   color: white;
   border-radius: 12px;
   margin-top: 12px;
   right: 50%;
   left: 39%;
   font-size: 20px;">
      </div>
      <br><br>
      <div class="carsforsell">
         <div class="car 1">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>3,500,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>4,550 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2021</h3>
               </div>
               <p>Used - 9.5/10 - Laghouat</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 2">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>6,870,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>4,000 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2020</h3>
               </div>
               <p>Used - 9.5/10 - Djelfa</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 3">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>2,420,000 DZD</h4>
               <h2>Audi A1 2020</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>5,300 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2019</h3>
               </div>
               <p>Used - 9.1/10 - Tbesa</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 4">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>3,000,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>9,000 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2018</h3>
               </div>
               <p>Used - 9.5/10 - Oran</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 5">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>6,000,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>2,000 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2017</h3>
               </div>
               <p>Used - 9.5/10 - Msila</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 6">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>5,600,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>1,400 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2016</h3>
               </div>
               <p>Used - 8.9/10 - Annaba</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 7">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>3,012,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>2,080 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2015</h3>
               </div>
               <p>Used - 9.2/10 - Ghardaia</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 8">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>9,300,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>30 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2014</h3>
               </div>
               <p>Used - 8.7/10 - Adrar</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
            <div class="imgtext"></div>
            <div class="car_caractice"></div>
         </div>
         <div class="car 9">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>4,200,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>8,000 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2013</h3>
               </div>
               <p>Used - 8.5/10 - Constontine</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
         <div class="car 10">
            <div class="imgtext">
               <div class="forsell">
                  Sell
               </div>
               <img src="image/audi1.jpeg" alt="audi1">
            </div>
            <div class="car_caractice">
               <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
               <h4>1,670,000 DZD</h4>
               <h2>Audi A1 2022</h2>
               <div class="h3info">
                  <h3>Petrol</h3>
                  <h3>2,300 km</h3>
                  <h3>Manual</h3>
                  <h3>Sport</h3>
                  <h3>White</h3>
                  <h3>2012</h3>
               </div>
               <p>Used - 9.8/10 - Alger</p>
               <div class="more">Show More
                  <i class="fa-solid fa-right"></i>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>

</html>