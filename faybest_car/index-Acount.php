<!DOCTYPE html>
<?php
@include 'Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="css/style-Acount.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <div class="contain">
      <img class="imgone" src="image/account.svg" alt="acount-photo">
      <img class="imgtwo" src="image/Asset 1.png" alt="" sizes="" srcset="">
      <br>
      <h1>- Wellcome To Your FayBest Acount -</h1>
      <div class="leftbar">
         <a id="one" onclick="dsisplaytwo()">Acount</a>
         <a id="four" href="">Order</a>
         <a id="five" href="">Product</a>
         <a id="six">Shop</a>
         <a id="seven" onclick="dsisplayone()">Contact</a>
      </div>
      <div id="formone" class="form">
         <form class="oneoneone">
            <label for=""></label><!-- 1 -->
            <input type="text" id="two" placeholder="Firstname">
            <br>
            <label for=""></label><!-- 2 -->
            <input type="text" id="two" placeholder="Lastname">
            <br>
            <label for=""></label><!-- 3 -->
            <input type="email" id="two" placeholder="Email">
            <br>
            <label for=""></label><!-- 4 -->
            <input type="text" id="two" value="Djelfa - haybastin - N01 - M2" placeholder="Adresse">
            <br>
         </form>
         <form class="oneone">
            <label for=""></label><!-- 4 -->
            <input type="text" id="three" placeholder="City">
            <br>
            <label for=""></label><!-- 5 -->
            <input type="text" id="three" value="+213000000000" placeholder="Phone number">
            <br>
            <label for=""></label><!-- 6 -->
            <input type="text" id="three" value="0079999999029199682164" placeholder="Number of BaridiMob">
            <br>
            <label for=""></label><!-- 7 -->
            <input type="text" id="three" placeholder="Your sexe">
            <br>
            <input type="submit" value="Save change"><!-- 8-->
         </form>
      </div>
      <div id="formformtwo">
         <form class="oneoneone">
            <label for=""></label><!-- 1 -->
            <input type="text" id="two" placeholder="Firstname">
            <br>
            <label for=""></label><!-- 2 -->
            <input type="text" id="two" placeholder="Lastname">
            <br>
            <label for=""></label><!-- 3 -->
            <input type="email" id="two" placeholder="Email">
            <br>
            <label for=""></label><!-- 4 -->
            <input type="text" id="two" value="Djelfa - haybastin - N01 - M2" placeholder="Adresse">
            <br>
         </form>
         <form class="oneone">
            <br>
            <label for="subject" style="margin: 5px -5px 1px 1px;">Message</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height: 192px;
                    margin: 27px 0px 0px -56px;
                    width: 667px;"></textarea>
            <br>
            <input type="submit" value="Send"><!-- 8-->
         </form>
      </div>
   </div>
   <script src="main-Acount.js"></script>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>