<?php
?>
<html>
<style>
    body{
        background:black;
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


    input[type=text],input[type='file'],select {
        width: 50%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-left:30%;
        background-color:transparent;
        color:white;

    }
    select{
        background-color:black;
        font-size:15px;
    }

    label {
        margin-bottom: 10px;
        display: block;
        margin-left:30%;
        font-size: 24px;

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
        margin-left:30%;
    }

    .btn:hover {
        background-color: #ff9f00;
    }

    a {
        color: white;
    }

    hr {
        border: 1px solid lightgrey;
    }

    span.price {
        float: right;
        color: grey;
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
        min-width: 300px;
        padding: 10.5px 20px;
        display: inline-block;
        text-align: center;
        font-weight: 800;
        text-transform:uppercase;
        font-size:18px;
        margin-top:20px;

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


    button:hover{
        border:3px solid #e75b1e;
        background:none;
    }
    button{
        background:#e75b1e;
        color:#fff;
        min-width: 200px;
        padding: 10.5px 20px;
        display: inline-block;
        text-align: center;
        font-weight: 800;
        text-transform:uppercase;
        font-size:18px;
        float: left;
        margin-left:65%;
    }



</style>

<body>


<div class="container">
    <form action="tblinsert.php" method="post" enctype="multipart/form-data">

        <div class="row">


            <div class="col-50">
                <div class="col">

                    <div class="col-50">
                        <h1> <a href="insert.php"> Insert Item </a></h1>
                    </div>
                    <label for="name" style="color:grey"></i> Item Name</label>
                    <input type="text" id="name" name="name" placeholder=""  >

                    <label for="price" style="color:grey"></i> Price</label>
                    <input type="text" id="price" name="price" placeholder="">

                    <label for="category" style="color:grey"></i> Category</label>
                    <select name="category" id="">
                        <option value="1">WomensCollections</option>
                        <option value="2">MensCollections</option>
                        <option value="3">JewelleryCollections</option>
                        <option value="4">BeautyCollections</option>
                    </select>

                    <label for="color" style="color:grey"></i> Color</label>
                    <input type="text" id="color" name="color" placeholder="">

                    <label for="material" style="color:grey"></i> Material</label>
                    <input type="text" id="Material" name="material" placeholder="" >

                    <label for="size" style="color:grey">Size</label>
                    <input type="text" id="size" name="size" placeholder="">

                    <label for="description" style="color:grey" width="50px">Description</label>
                    <input type="text" id="description" name="description" placeholder="">
                    <br><br>
                    <input  name="image" id="image" style="border: none;box-shadow: none;" type="file" placeholder="image" required>
<!--                    <label for="image" style="color:grey" width="50px">Choose Image</label>-->
<!--                    <input  name="image"  style=" margin-left:30%;border: none;box-shadow: none; type="file" placeholder="image" required>-->




                    <div class="row">
                        <div class="col-50">
                            <div class="book-btn">
                              <button type="submit" name="additem"> Add Item </button>
                            </div>
                        </div>



                        <div class="col-50">
                            <div class="book-btn">
                                <button name="additem" style="margin-left:20px"><a href="dash.php"> back </a></button>
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
