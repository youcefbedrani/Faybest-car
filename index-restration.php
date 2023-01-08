<!DOCTYPE html>
<?php
@include 'Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="css/style-restration.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <?php
   if (isset($_POST['submit'])) {
      $frname = $_POST['frname'];
      $ltname = $_POST['ltname'];
      $email = $_POST['email'];
      $Address = $_POST['Address'];
      $number = $_POST['number'];
      $Password = $_POST['Password'];

      $query = "insert into USER (FNAME,LNAME,EMAIL,ADRESSE,PNUMBER,PASSWORD) values ('" . $frname . "','" . $ltname . "','" . $email . "','" . $Address . "','" . $number . "','" . $Password . "')";

      $result = mysqli_query($connect, $query);

      if ($result) {
         echo "<br> DATA IS INSERTED </br>";
      } else {
         echo "<br> DATA IS NOT INSERTED </br>";
      }
   }
   ?>
   <div class="contain">
      <center><img src="image/Asset 1.png" alt="faybestlog-png"></center>
      <br>
      <h1>Sing-up</h1>
      <br>
      <form action="" method="POST">
         <br>
         <label for="one-login" id="one">Firstname :</label>
         <input type="text" id="one-login" name="frname" placeholder="Your first name">
         <br>
         <label for="one-login" id="one">Lastname :</label>
         <input type="text" id="one-login" name="ltname" placeholder="Your last name">
         <br>
         <label for="one-login" id="one">Email :</label>
         <input type="email" id="one-login" name="email" placeholder="Email">
         <br>
         <label for="one-login" id="one">Address :</label>
         <input type="text" id="one-login" name="Address" placeholder="Address with detail.">
         <br>
         <label for="one-login" id="one">Phone number :</label>
         <input type="text" id="one-login" name="number" placeholder="+213 (- - - - - - - - -)">
         <br>
         <label for="pass-login" id="one">Password :</label>
         <input type="password" id="pass-login" name="Password" placeholder="Password">
         <br>
         <br>
         <input type="submit" value="insert" name="submit" id="one">
      </form>
      <br>
   </div>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>