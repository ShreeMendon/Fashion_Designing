<?php

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
    .book-btn a:hover{
        border:3px solid #fffff;
        background:none;
    }


</style>
<body>
<div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="block-title text-center">
                   Admin
                </h2>
                <!--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut orci varius, elementum lectus nec, aliquam lectus. Duis neque augue, maximus in sapien ut, porta pharetra odio.</p>-->
            </div>


            <div class="row">
                        <div class="book-btn">
                            <a href="insert.php"> Insert Item </a>
                        </div>
            </div><hr/>
            <div class="row">
                    <div class="book-btn">
                        <a href="update.php"> Update </a>
                    </div>
            </div><hr/>

            <div class="row">
                    <div class="book-btn">
                        <a href="delete.php"> Delete </a>
                    </div>
            </div><hr/>

                <div class="row">
                    <div class="book-btn">
                        <a href="view.php"> View </a>
                    </div>
                </div><hr/>


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