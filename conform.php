<?php
include("sql.php");

session_start();
if(isset($_POST['submit']))
{
    $cardname=$_POST['cardname'];
    $cardno=$_POST['cardnumber'];
    $expmonth=$_POST['expmonth'];
    $expyear=$_POST['expyear'];
    $cvv=$_POST['cvv'];
    $lid=$_SESSION['lid'];
    $pid=$_SESSION['pid'];

//    echo $username."</br>".$password."</br>".$repassword."</br>".$email."</br>";

     $query=mysqli_query($sql,"INSERT INTO payment(id,cardName,cardNo,expMonth,expYear,cvv,pid,lid) VALUES(0,'$cardname','$cardno','$expmonth','$expyear','$cvv','$pid','$lid')");
    if($query)
    {
        echo "<script>alert('Order Placed Successfully');</script>";
    }
    else{
        echo "<script>alert(' something went worng!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>GLAMOUR - One page HTML Responsive</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <script src="js/all.js"></script>


</head>
<style>
    a {
        color: white;
    }
    .col-50{
        float:left;
    }
    h3 {
        font-family: 'nautilus_pompiliusregular';
        font-size: 20px;
        margin-left:20px;
    }
    .cart-btn a{
        background:#ff9f00;
        color:#fff;
        min-width: 100px;
        padding: 10.5px 20px;
        display: inline-block;
        text-align: center;
        font-weight: 800;
        text-transform:uppercase;
        font-size:15px;
        margin-top:20%;
        margin-left:20px;
    }
    .cart-btn a:hover{
        border:3px solid #ff9f00;
        background:none;
    }
</style>
<body>
<div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <center>
                <a  href="home.php">
                    <h2 class="block-title"> GLAMOUR</h2>

                </a></center>
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>-->


            <div class="row">
<!--                <center><h2 style="color:white">THANK YOU</h2></center>-->
                   <center><h2 style="color:white">YOUR ORDER PLACED SUCCESSFULLY</h2></center>
                    <?php
                        $res1=mysqli_query($sql,"select * from users where id='$lid'");
                        $arr1=mysqli_fetch_assoc($res1);
                        $pid1=$arr1['pid'];
                    $res2=mysqli_query($sql,"select * from itemdetails where id='$pid1'");
                    $arr2=mysqli_fetch_assoc($res2);
                    ?>
                <div class="col-50" >
                <img src="<?php echo $arr2['image'];?>" height="450" width="300" />

                </div>

                <div class="col-50">
                    <h3 style="color:grey" >Your Name: <?php echo $arr1['name'] ?></h3>
                    <h3 style="color:grey">Email: <?php echo $arr1['email'] ?></h3>
                    <h3 style="color:grey">Price: <?php echo $arr2['price'] ?></h3>
                    <h3 style="color:grey">Size: <?php echo $arr1['size'] ?></h3>
                    <h3 style="color:grey">State: <?php echo $arr1['shippingState'] ?></h3>
                    <h3 style="color:grey">City: <?php echo $arr1['shippingCity'] ?></h3>
                    <h3 style="color:grey">Pincode: <?php echo $arr1['shippingPincode'] ?></h3>

                    <h3 style="color:grey">Delivery Time: Within India:7 weeks,International:8 weeks</h3>
                    <h3 style="color:grey">Description: <?php echo $arr2['description'] ?></h3>

                    <div class="col-50">
                        <div class="col-50">
                            <div class="cart-btn">
                                <a href="home.php"> Conform </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>
    <!-- end row -->
</div>






<a href="#" class="scrollup" style="display: none;">Scroll</a>

<section id="color-panel" class="close-color-panel">
    <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
    <!-- Colors -->
    <div class="segment">
        <h4 class="gray2 normal no-padding">Color Scheme</h4>
        <a title="orange" class="switcher orange-bg"></a>
        <a title="strong-blue" class="switcher strong-blue-bg"></a>
        <a title="moderate-green" class="switcher moderate-green-bg"></a>
        <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
    </div>
</section>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
</body>

</html>