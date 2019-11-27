<?php
session_start();
$id = $_SESSION['pid'];
include "sql.php";
$str = "Select * from itemDetails where id='$id' and ActiveFlag=1";
$res = mysqli_query($sql, $str);
$arr = mysqli_fetch_assoc($res);
if(!isset($_SESSION['lid']))
{
    $_SESSION['gotopayment']=true;
    header("Location:index.php");
}
else if(isset($_POST['subBtn']))
{
    $lid=$_SESSION['lid'];
    $name=$_POST['fullname'];
    $email=$_POST['email'];
    $address=$_POST['address'];
//    $contactno=$_POST['contactno'];
//    $password=($_POST['password']);
    $city=($_POST['city']);
    $state=($_POST['state']);
    $pincode=($_POST['zip']);

    $query=mysqli_query($sql,"update users set shippingAddress='$address',shippingState='$state',shippingCity='$city',shippingPincode='$pincode',pid='$id' where id='$lid'");
    if($query)
    {
        echo "<script>alert('successfull ');</script>";
    }
    else{
        echo "<script>alert(' something went worng');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
            background:grey;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: black;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
            margin-left:300px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #ff9f00;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #ff9f00;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
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
        }
        .cart-btn a:hover{
            border:3px solid #ff9f00;
            background:none;
        }
        div.container{
            margin-left:10px;
            margin-right:10px;
        }
        div.gallery{
            padding:20px;
            margin-left:12%;
        }
        div.row{
            background:black;
            /*border:3px solid #ff9f00;*/
            -
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
        button:hover{
            border:3px solid #ff9f00;
            background:none;
        }
        button {
            background: #ff9f00;
            color: #fff;
            min-width: 219px;
            padding: 10.5px 20px;
            display: inline-block;
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 15px;
            float: left;
            margin-left: 20%;
        }

    </style>
</head>
<body>


<div class="container">
    <form action="conform.php" method="post">

        <div class="row">
            <div class="col-50">
                <div class="gallery">
                    <img src="<?php echo $arr['image'] ?>"  width="500" height="680" >
                </div>
            </div>


            <div class="col-50">
                <div class="col">
                    <h3 style="color:white">Payment</h3>
                    <label for="fname" style="color:white">Accepted Cards</label>
                    <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <label for="cname" style="color:white">Name on Card</label>
                    <input type="text" id="cname" required name="cardname" placeholder="John More Doe">
                    <label for="ccnum" style="color:white">Credit card number</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth" style="color:white">Exp Month</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                    <div class="row">
                        <div class="col-50">
                            <label for="expyear" style="color:white">Exp Year</label>
                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="col-50">
                            <label for="cvv" style="color:white">CVV</label>
                            <input type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                    </div>
                    <br><br>
                    <!--                        <input type="submit" value="Place Order" class="btn">-->
                    <div class="row">
                        <div class="col-50">
                            <div class="cart-btn">
                                <a href="cart.php"> back </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <button type="submit" class="book-btn" name="submit">
                                 place order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>
</div>
<!--    <div class="col-25">-->
<!--        <div class="container">-->
<!--            <h4>Cart <span class="price" style="color:#ff9f00"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>-->
<!--            <p><a href="#">Product 1</a> <span class="price">$15</span></p>-->
<!--            <p><a href="#">Product 2</a> <span class="price">$5</span></p>-->
<!--            <p><a href="#">Product 3</a> <span class="price">$8</span></p>-->
<!--            <p><a href="#">Product 4</a> <span class="price">$2</span></p>-->
<!--            <hr>-->
<!--            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>-->
<!--        </div>-->
<!--    </div>-->

</body>
</html>
