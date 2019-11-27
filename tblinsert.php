<?php

if(isset($_POST['additem'])){


    $name=$_POST['name'];
    $price=$_POST['price'];
    $color=$_POST['color'];
    $category=$_POST['category'];
    $material=$_POST['material'];
    $size=$_POST['size'];
    $description=$_POST['description'];
    $image_name=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,"images/".$image_name);
    include "sql.php";
    $res=mysqli_query($sql,"Insert into itemdetails values(0,'$category',0,'$name','$price','images/$image_name','$color','$material','Within India:7 weeks,International:8 weeks','$size','$description',1)");
}
header("location:view.php");
?>
