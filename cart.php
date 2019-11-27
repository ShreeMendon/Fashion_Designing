<?php
$id ='';
include_once "sql.php";
session_start();
$lid=$_SESSION['lid'];
$id = $_SESSION['pid'];
$str = "Select * from itemDetails where id='$id' and ActiveFlag=1";
$res = mysqli_query($sql, $str);
$arr = mysqli_fetch_assoc($res);
$size=$_POST['size'];

$query=mysqli_query($sql,"update users set size='$size',pid='$id' where id='$lid'");
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

            /*background:url(../images/special_menu_bg.jpg) no-repeat center;*!*/
            /*background-attachment:fixed;*/
            /*background-size:cover;*/
            /*position:relative;*/
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -10px;


        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50{
            -ms-flex: 40%; /* IE10 */
            flex: 40%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 7%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 19px;
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
        @media (max-width: 900px) {
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
        div.row{
            background:black;
            /*border:3px solid #ff9f00;*/
            -
            }
        div.container{
            margin-left:10px;
            margin-right:10px;
        }
        div.gallery{
            padding:20px;
            margin-left:12%;
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
    <form action="payment.php" method="post">

        <div class="row">
            <div class="col-50">
                <div class="gallery">

                    <img src="<?php echo $arr['image'] ?>"  width="500" height="680" >
                </div>
            </div>


            <div class="col-50">
                <div class="col">

                    <h3 style="color:white">Billing Address</h3>
                    <label for="fname" style="color:white"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" required name="fullname" placeholder="" >

                    <label for="email" style="color:white"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" required name="email" placeholder="">

                    <label for="adr" style="color:white"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr"required name="address" placeholder="">

                    <label for="city" style="color:white"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" required name="city" placeholder="" >

                    <label for="state" style="color:white">State</label>
                    <input type="text" id="state" required name="state" placeholder="">

                    <label for="zip" style="color:white" width="50px">Pincode</label>
                    <input type="text" id="zip" required name="zip" placeholder=""><br><br>



                    <div class="row">
                        <div class="col-50">
                            <div class="book-btn">
                                <a href="details.php"> back </a>
                            </div>
                        </div>
                        <div class="col-50">
                            <div class="book-btn">

                                <button type="submit" name="subBtn"> Continue to checkOut </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </form>
</div>



</body>
</html>

