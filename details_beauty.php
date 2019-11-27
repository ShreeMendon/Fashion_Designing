<?php
$id=$_GET['id'];
include_once "sql.php";
$str="Select * from itemDetails where id='$id' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
$arr=mysqli_fetch_assoc($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    div.container{
        border: 3px solid #ccc;
        height:710px;
        width:100%;

    }
    div.details{
        margin-left:50px;
    }

    div.book-btn{
        margin-top:50px;
    }

    div.gallery {
        margin: 6px;
        /*border: 3px solid #ccc;*!*!*/
        float: left;
    }

    body{
        background-color:black;
    }

    .book-btn a{
        background:#e75b1e;
        color:#fff;
        min-width: 219px;
        padding: 10.5px 20px;
        display: inline-block;
        text-align: center;
        font-weight: 800;
        text-transform:uppercase;
        font-size:18px;
        float: left;
    }
    .book-btn a:hover{
        border:3px solid #e75b1e;
        background:none;
    }

    .cart-btn a{
        background:#ff9f00;
        color:#fff;
        min-width: 219px;
        padding: 10.5px 20px;
        display: inline-block;
        text-align: center;
        font-weight: 800;
        text-transform:uppercase;
        font-size:18px;
        margin-top:50px;
    }
    .cart-btn a:hover{
        border:3px solid #ff9f00;
        background:none;
    }
    div.price{
        color:#fff;
    }
    h2{color:white;}


</style>

<body>
<div class="container">
    <div class="row">
        <div class="col-50">
            <div class="gallery" >

                <img src="<?php echo $arr['image'] ?>"  width="500" height="680" >
            </div>
            <div class="col-50">
                <div class="details">
                    <div class="description">
                        <h2><?php echo $arr['name'] ?>
                        </h2>
                    </div>
                    <div class="price">
                        <h1 style="color:grey"> Rs  <?php echo $arr['price'] ?></h1>
                    </div>


                    <div>
<!--                        <h4 style="color:white">Composition & Care</h4>-->
                        <p style="color:grey">
                            <?php echo $arr['material'] ?></p>
                        <h4 style="color:white">Benifits</h4>
                        <p style="color:grey">
                            <?php echo $arr['description'] ?></p>

                        <h4 style="color:white">Shipping &Packaging</h4>

                        <p style="color:grey">
                            Delivery Time: Within India:7 weeks,International:8 weeks<br>
                            Shipping: The product will be  shipped to you at the earliest.<br>
                            The sending details will be shared with you through email for you to trcck.<br>
                            Packaging: your garment will come wrapped in butter paper, and further <br>packaged and boxed carefully
                            to ensure that your garment reaches you in perfect condition.</p>

                    </div>


<!--                    <h3 style="color:grey">-->
<!--                        Select your size:-->
<!--                        <button style="color:grey">S</button>-->
<!--                        <button style="color:grey">L</button>-->
<!--                        <button style="color:grey">XL</button>-->
<!--                        <button style="color:grey">XXL</button>-->
<!--                        <button style="color:grey">Medium</button>-->
<!--                    </h3>-->
                    <div class="service" style="color:white">
                        *30 Day Return Policy<br>
                        *Cash on Delivery available
                    </div><br>

                    <div class="row">

                        <div class="col-50">
                            <div class="cart-btn">
                                <a href="cart.php"> buy now </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</html>

