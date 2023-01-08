<!DOCTYPE html>
<?php
@include 'Database/config.php';
?>
<html>

<head>
   <link rel="stylesheet" href="css/style_login.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <?php
   $query = " select EMAIL , PASSWORD FROM USER";
   $result = mysqli_query($connect, $query);
   if (isset($_POST['Login'])) {
      $email = $_POST['email'];
      $Password = $_POST['Password'];
      while ($row = mysqli_fetch_assoc($result)) {
         if ($email === $row['EMAIL'] && $Password === $row['PASSWORD']) {
            echo "Wellcome To Your Acount";
         } else {
            echo "THERE is WORNG THING ...!";
         }
      }
   }
   ?>
   <div class="contain">
      <center><img src="image/Asset 1.png" alt="faybestlog-png"></center>
      <br>
      <h1>Sing-in</h1>
      <br>
      <form action="" method="post">
         <label for="one-login" id="one">Email :</label>
         <input type="email" id="one-login" name="email" placeholder="Email">
         <br>
         <label for="pass-login" id="one">Password :</label>
         <input type="password" id="pass-login" name="Password" placeholder="Password">
         <br>
         <input type="submit" value="Login" name="Login" id="one">
      </form>
      <br>
      <center><a href="index-restration.php" target="_blank" class="href"><b>Create New Account.?</b></a></center>
   </div>
   <?php
   mysqli_free_result($result);
   ?>
   <?php
   mysqli_close($connect);
   ?>
</body>

</html>