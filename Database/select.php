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

$query = "select year_p,mile_p,brand_p,price_p,location_p,tranis_p from producte";
$result = mysqli_query($connect, $query);

if (isset($_POST['search'])) {
   $year = $_POST['one'];
   $type = $_POST['two'];
   $brand = $_POST['three'];
   $price = $_POST['four'];
   $location = $_POST['five'];
   $transmission = $_POST['six'];
   while ($row = mysqli_fetch_assoc($result)) {
      if ($year === $row['year_p'] && $type === $row['mile_p'] && $brand === $row['brand_p'] && $price === $row['price_p'] && $location === $row['location_p'] && $transmission === $row['tranis_p']) {
      } else {
      }
   }
   if (!$result) {
      die("Eror in Query");
   }
}
