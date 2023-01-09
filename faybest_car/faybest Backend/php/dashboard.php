<?php
    include("conn.php");

    if (isset($_POST['add-blog'])) {
     $name=$_POST['name'];
     $Describetion=$_POST['Describetion'];
     $Date=$_POST['Date'];

     $image           =$_FILES['image'];
     $image_location  =$_FILES['image']['tmp_name'];
     $image_name      =$_FILES['image']['name'];
     $image_up        ="../photo/".$image_name;

     $insert="insert into blog(name,Describetion,Date,image) values('$name','$Describetion','$Date','$image_up')";
     mysqli_query($con,$insert);
     if(move_uploaded_file($image_location,"../photo/".$image_name)){
        echo "<script>alert('تم رفع المنتج بنجاح')</script>";
    }else{
        echo "<script>alert('حدث مشكلة لم يتم رفع المنتج')</script>";
    }
    };
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../css/dashboard-style.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <h3>لوحة تحكم الادمن</h3>
        </div> 
    </div>
    <div class="blog"><br>
        <h3>Articles section</h3>
        <div class="blog-one">
          <form  method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="ادخل عنوان المقالة"><br><br>
            <input type="text" name="Describetion" placeholder="ادخل وصف قصير للمقالة"><br><br>
            <input type="file" name="image" id="file"  style="display:none"><br>
            <label for="file" class="add-img">اختيار صورة</label><br><br>
            <input type="date" name="Date"><br><br>
            <button type="submit" name="add-blog" class="add-blog">اضافة مقال</button>
          </form>
        </div>
       
    </div>
</body>
</html>