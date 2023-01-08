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

if (isset($_POST['tosearch'])) {
   $search = $_POST['totosearch'];
   $query = "select * from producte where name_p like '%" . $search  . "%' ";
   $result = mysqli_query($connect, $query);
   if (!$result) {
      die("Eror in Query");
   }
}
