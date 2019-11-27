<?php
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 355px;
            padding:20px;
            margin-left:5%;
            margin-top:6%;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;

        }

        div.desc {
            padding: 20px;
            text-align: center;
            color:gray;

        }
        body{
            background-color:black;
        }
    </style>
    <script type="text/javascript">
        function gotodetails(id)
        {
            $.get("setsession.php",{'id':id},function(){})
            window.location.href="details.php";
        }
    </script>
</head>
<body>
<?php
include_once "sql.php";
$str="Select * from itemdetails where itemcategoryid='3' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
while($arr=mysqli_fetch_assoc($res))
{
    $id=$arr['id'];
    ?>
    <div class="gallery ">
        <a target="_blank" href="details_jew.php?id=<?php echo $arr['id'] ?>">
            <img id="" onclick="gotodetails('<?php echo $id; ?>')" src="<?php echo $arr['image'] ?>" alt="Cinque Terre" width="500" height="400">
        </a>
        <div class="desc"><?php echo $arr['name'] ?></div>
    </div>


<?php } ?>

</body>
</html>

