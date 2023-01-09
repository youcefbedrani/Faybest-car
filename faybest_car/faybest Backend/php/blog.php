
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/try/css">
    <!-- botstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
  <link rel="stylesheet" href="../css/style.css" />

    <!-- google font -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <!-- font awsom -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>blog-post</title>
   <style>
   .card{
    color:black;
   }
   h5{
    font-size:20px;
   }
   p{
    font-size:16px;
    font-weight:100;
   }
   .Blog-Post .content-blog .container{
    height: auto;
   }
   </style>
  
  </head>
  <body>

     <!-- start section expertise -->
     <section class="expertise">
      <div class="container">
        <div class="content">
          <div class="text">
            <h1>
              More Than 10 Years Of<br />
              <span>Experience</span>
            </h1>
            <p>
              Lorem ipsum dolor sit,<br />
              amet consectetur adipisicing elit
            </p>
          </div>
        </div>

        <div class="boxes">
          <div class="box">
            <span class="material-symbols-outlined">agriculture</span>
            <div class="res">
              <h3 class="counter" data-num="999">0</h3>
              <p>Total tractors</p>
            </div>
          </div>
          <div class="box">
            <span class="material-symbols-outlined">toys</span>
            <div class="res">
              <h3 class="counter" data-num="777">0</h3>
              <p>Total cars</p>
            </div>
          </div>
          <div class="box">
            <span class="material-symbols-outlined">two_wheeler</span>
            <div class="res">
              <h3 class="counter" data-num="777">0</h3>
              <p>Total moto</p>
            </div>
          </div>
          <div class="box">
            <span class="material-symbols-outlined"
              >settings_accessibility</span
            >
            <div class="res">
              <h3 class="counter" data-num="999">0</h3>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section expertise -->
    
    <!-- start section our-team -->
    <section class="our-team">
      <div class="main-heading">
        <h1>Our <span>Team</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="img-our-team">
        <div class="container">
          <div class="box one">
            <img src="../image/team1.jpg" alt="" />
            <div class="text-team">
              <a href="#"><h1>Hadji</h1></a>
              <p>web developer</p>
            </div>
          </div>
          <div class="box two">
            <img src="../image/team1.jpg" alt="" />
            <div class="text-team">
              <a href="#"><h1>hadji</h1></a>
              <p>web developer</p>
            </div>
          </div>
          <div class="box three">
            <img src="../image/team1.jpg" alt="" />
            <div class="text-team">
              <a href="#"><h1>badrani</h1></a>
              <p>web developer</p>
            </div>
          </div>
          <div class="box four">
            <img src="../image/team1.jpg" alt="" />
            <div class="text-team">
              <a href="#"><h1>badrani</h1></a>
              <p>web developer</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section our-team -->

    <!-- start section Why-us -->
    <section class="Why-us">
      <div class="content1"></div>
      <div class="content2">
        <div class="main-heading">
          <h1>why <span>us?</span></h1>
          <div class="Founder slid-founder">
            <p>
              Quae illo iste perspiciatis harum numquam quibusdam quidem sunt
            </p>
            <img
              src="../image/avatar icon1.png"
              alt=""
              width="100px"
              height="100px"
            />
            <h2>Mohamed Hadji</h2>
            <h3>web developer</h3>
          </div>
          <div class="Founder">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae illo
              iste
            </p>
            <img
              src="../image/avatar icon2.png"
              alt=""
              width="100px"
              height="100px"
            />
            <h2>Badrani Mohamed</h2>
            <h3>mobile developer</h3>
          </div>
          <div class="rectangle">
            <ul>
              <li class="bg slidbg" onclick="preve1() & preve2()"></li>
              <li class="bg" onclick="next1() & next2()"></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- end section section Why-us -->
    <?php
include("conn.php");
$r=mysqli_query($con,"select * from blog");

echo <<<"hero"
          <section class="Blog-Post">
          <div class="main-heading">
           <h1>Latest <span>Blog Post</span></h1>
           <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod
           </p>
           </div>
           <div class="content-blog">
            <div class="container">

            
          hero;
while ($rwo=mysqli_fetch_array($r)) {
echo <<<"hero"
          <div class="card" style="width: 18rem;">
          <img src="$rwo[image]" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">carde</h5>
            <p class="card-text">$rwo[Describetion]</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">$rwo[Date]نشر في  </li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">قرائة المقال</a>
          </div>
          </div>

         hero;
};
echo "</div></div>"
?>
    
    <!-- start section footer -->
    <section class="footer">
      <div class="consultation">
        <div class="container">
          <p>Do you want to take advice from our team?</p>
          <a href="#">GET</a>
        </div>
      </div>
      <div class="container">
        <div class="footer-links">
          <div class="footer-1">
            <div class="footer-text">
              <h4>Contact Info</h4>
              <div class="icon-text">
                <span class="material-symbols-outlined">location_on</span>
                <p>Djelfa, University Residence, Shaqra bin Saleh</p>
              </div>
              <div class="icon-text">
                <span class="material-symbols-outlined">outgoing_mail</span>
                <p>TaharHadji99@gmail.com</p>
              </div>
              <div class="icon-text">
                <span class="material-symbols-outlined">phone_in_talk </span>
                <p>0669610367</p>
              </div>
              <div class="icon-text">
                <span class="material-symbols-outlined">fax</span>
                <p>85X6 987</p>
              </div>
              <div class="icon-text">
                <span class="material-symbols-outlined">language</span>
                <p>FayBest.com</p>
              </div>
            </div>
          </div>
          <div class="footer-2">
            <h4>Links</h4>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Services</a>
            <a href="#">Car Listing</a>
            <a href="#">Blog</a>
            <a href="#">Gallery</a>
            <a href="#">Contact Us</a>
            <a href="#">Elements</a>
          </div>
          <div class="footer-3">
            <h4>recent cars</h4>
            <div class="recent">
              <div class="recent-cars">
                <img src="../image/recent cars1.jpg" alt="" />
                <div class="text-recent-cars">
                  <h5>Bentley Continental GT</h5>
                  <div class="text-recent-cars1">
                    <p>$793|</p>
                    <span class="material-symbols-outlined"
                      >calendar_month</span
                    >
                    <p>28 jan 2022</p>
                  </div>
                </div>
              </div>
              <div class="recent-cars">
                <img src="../image/recent cars2.jpg" alt="" />
                <div class="text-recent-cars">
                  <h5>Fiat Punto Red</h5>
                  <div class="text-recent-cars1">
                    <p>$1298|</p>
                    <span class="material-symbols-outlined"
                      >calendar_month</span
                    >
                    <p>03 dec 2022</p>
                  </div>
                </div>
              </div>
              <div class="recent-cars">
                <img src="../image/recent cars3.jpg" alt="" />
                <div class="text-recent-cars">
                  <h5>Nissan Micra Gen5</h5>
                  <div class="text-recent-cars1">
                    <p>$3924|</p>
                    <span class="material-symbols-outlined"
                      >calendar_month</span
                    >
                    <p>12 dec 2022</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-4">
            <h4>Subscribe</h4>
            <p>Subscribe now to the newsletter and get the latest briefs</p>
            <div class="newsletter">
              <input class="input1" type="email" placeholder="email" />
              <button class="input2">
                <span class="material-symbols-outlined newsletter-send">
                  send</span
                >
              </button>
            </div>
          </div>
          <hr />
        </div>
        <div class="Rights">
          <p>© 2022 All Rights Reserved.</p>
          <div class="link-end">
            <a href="#" class="fac"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="twi"> <i class="fa-brands fa-twitter"></i></a>
            <a href="#" class="ins"> <i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="lin"> <i class="fa-brands fa-github"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- end section footer -->
    
    <script src="../js/main.js"></script>
  </body>
</html>
