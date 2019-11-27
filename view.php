<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border:1px solid black;
        }
        td{
            text-align:center;
            padding:5px 20px;
        }
        th{
            padding:10px 20px;
        }
        table{
            border-collapse:collapse;
        }
        img{
            width:100px;
            height:100px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th></th>
            <th>Category</th>
            <th>Size</th>
            <th>Color</th>
            <th>Material</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    <?php
    include_once "sql.php";
    $res=mysqli_query($sql,"select i.name,c.categoryName,i.size,i.color,i.meterial,i.description,i.price,i.image from itemdetails i,category c where i.itemcategoryid=c.id");
    while($row=mysqli_fetch_assoc($res)){?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><img src="<?php echo $row['image'];?>" alt=""></td>
            <td><?php echo $row['categoryName']; ?></td>
            <td><?php echo $row['size']; ?></td>
            <td><?php echo $row['color']; ?></td>
            <td><?php echo $row['meterial']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>