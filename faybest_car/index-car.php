<!DOCTYPE html>
<html>

<head>
   <title>Faybest-Cars</title>
   <link rel="stylesheet" href="css/style-ca1r.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" content="height=device-height, initial-scale=1">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Kufam:ital,wght@1,700&family=Oswald:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      header .one {
         grid-template-columns: 26ch 28ch 34ch 1fr 1fr;
      }

      #slect_acount {
         position: relative;
         top: -2px;
         right: -744px;
         border: 0px;
      }

      #slect_acount select {
         width: 100px;
         height: 30px;
         border: 0px;
         border-radius: 12px;
         background-color: #d7ecff;
         font-size: 18px;
         padding: 4px;
         text-align: center;
         box-shadow: -1px 2px 9px 3px #507386;
      }
   </style>
</head>

<body>
   <?php
   $host = "127.0.0.1";
   $user = "root";
   $password = "0667016425";
   $database = "faybestcar";
   $port = "3306";
   $connect = mysqli_connect($host, $user, $password, $database, $port,);
   if (mysqli_connect_errno()) {
      die("NO CONNECTION  TO DATABASE");
   } else {
   }
   ?>
   <!--Bedrani header one -->
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
            <div id="slect_acount">
               <select name="">
                  <option value=""><a href="">Acount</a></option>
                  <option value=""><a href="">Sing-in</a></option>
                  <option value=""><a href="">Sing-up</a></option>
               </select>
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
                  <div class="container-2">
                     <span class="icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                     <input type="search" id="search" placeholder="Search..." />
                  </div>
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
   <!--Bedrani section one -->
   <div class="container_sect">
      <section class="sect_1">
         <img class="not_img" name="slideformobile" src="">
         <div class="show_text_none">
            <h1>Wellceome To Car House</h2>
               <p>Allow us to guide you Through the innovative stress <br> Free approach in finding you dream car.</p>
         </div>
         <div class="slide">
            <img id="image" name="slideone" class="slide_image" src="image/">
            <a class="button_to_slide_L" id="HOV_1" onclick="prev()"><i class="fa-solid fa-chevron-left"></i> </a>
            <a class="button_to_slide_R" id="HOV_2" onclick="next()"><i class="fa-solid fa-angle-right"></i></a>
         </div>
         <div class="Show_text">
            <p class="onethree">DZD</p>
            <p class="onetwo">9800</p>
            <p class="oneone">Monthly</p>
            <h1>Wellceome To Car House</h1>
            <p class="p_not">Allow us to guide you Through the innovative stress <br> Free approach in finding you dream car.</p>
            <button class="button_for_slide" href="">Get Started Now</button>
         </div>
         <div class="login">
            <button><span><a href="index_login.html">Login</a></span></button>
            <a href="index-restration.html">Sign-up.here</a>
         </div>
      </section>
      <section class="sect_2">
         <div class="text_difn">
            <h1>Fuatered
               <span style="color: var(--seconde-color); font-weight:bold;">Cars</span>
            </h1>
            <p>You Find All Kinde of Cars here And All Symbole Do You Need</p>
         </div>
         <div class="cars">
            <div class="car1" id="swip_one">
               <div class="img_text">
                  <img src="image/volgs2.jpeg" class="img_hov" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3 class="hov_not">FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 166px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car2" id="swip_one">
               <div class="img_text">
                  <img class="img_hov" src="image/peugeot1.jpeg" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">
                     168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car3" id="swip_one">
               <div class="img_text">
                  <a><img class="img_hov" src="image/fiat1.webp" alt="rang1"></a>
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car4" id="swip_one">
               <div class="img_text">
                  <img src="image/volgs2.jpeg" class="img_hov" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3 class="hov_not">FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 166px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD
                  </p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car5" id="swip_one">
               <div class="img_text">
                  <img class="img_hov" src="image/peugeot1.jpeg" alt="rang1">
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">
                     168.999 DZD</p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
            <div class="car6" id="swip_one">
               <div class="img_text">
                  <a><img class="img_hov" src="image/fiat1.webp" alt="rang1"></a>
                  <a href="" class="hid_plus"><i class="fa-solid fa-plus"></i></a>
                  <h3>FOR SALE</h3>
                  <p class="hov_not" style="color:white; margin: 172px 0 0 22px;  font-size: 1.2em; font-family: var(--font-family1);">168.999 DZD
                  </p>
               </div>
               <div class="info">
                  <h2>Name of Car</h2>
                  <p><a><i class="fa-solid fa-location-dot"></i></a> Location </p>
                  <div class="car_info">
                     <h3>Petrol</h3>
                     <h3>4,000 km</h3>
                     <h3>Manual</h3>
                     <h3>Sport</h3>
                     <h3>White</h3>
                     <h3>2022</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sect_3">
         <div class="servise">
            <h1>What Are You Looking For</h1>
            <p>All servises Do You Need is here For Best <br> Experiece For You</p>
            <button>Read More</button>
         </div>
         <div class="servise_num">
            <div class="serv_one" id="width">
               <div class="icon_3"><img class="img_3" src="image/shield-check.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_two" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-deal.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_three" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-money.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
            <div class="serv_four" id="width">
               <div class="icon_3"><img class="img_3" src="image/flaticon-support.png" alt=""></div>
               <h2 id="thish2">Highly Secured</h2>
               <p class="p_one" id="pthis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt eiusmod tempor incididunt eiusmod</p>
            </div>
         </div>
      </section>
      <section class="sect_4">
         <div class="offer_difn">
            <h1>Latest <span style="color: red; font-weight: bold;">Offers</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
         </div>
         <div class="offer">
            <div class="offer1">
               <img src="image/dacia1.jpg" alt="car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 4.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 2rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer2">
               <img src="image/toyota5.jpeg"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 4.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 2rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer3">
               <img src="image/volvo1.jpeg"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 24.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed
               </p>
               <h2 style="padding: 21.3rem 0 0 27px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
            <div class="offer4">
               <img src="image/fiat2.png"" alt=" car-image">
               <h1 class="offer_h1"><a>MORE</a></h1>
               <div class="new">New</div>
               <p style="padding: 9.3rem 0 0 27px; color: red; position: absolute;"><span style="color: white; ">1050.00</span> Fixed</p>
               <h2 style="padding: 7.4rem 0 0 25px; color: white; position: absolute;">Name of car and Year</h2>
            </div>
         </div>
         <div id="scrolltop" onclick="doscroll()">
            <i class="fa-solid fa-arrow-up"></i>
         </div>
      </section>
   </div>
   <script src="javascript/indew-car.js"></script>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>