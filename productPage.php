<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    link bootstrap-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--    link my styles-->
    <link rel="stylesheet" href="animationCover.css">
    <link rel="stylesheet" href="forcards.css">
    <link rel="stylesheet" href="wrapp.css">
    <link rel="stylesheet" href="myStyle.css">
    <link rel="stylesheet" href="node_modules/flickity/dist/flickity.min.css">
    <script src="node_modules/flickity/dist/flickity.pkgd.min.js"></script>
    <title>Document</title>
</head>
<body class="home" style="background: #f5f5f5" >
<script>

</script>
<header>
    <nav class="navbar navbar-expand-sm px-lg-5 navbar-dark bg-dark fixed-top ">
        <div class="container-fluid  ">
            <a class="navbar-brand " href="index.php">HQStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav mx-auto  justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="shirts.php">Shirts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shoes.php">Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jeans.php">Jeans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="suits.php">Suits </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-primary" type="submit">LogIn</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
<?php
$barc=$_GET['barcode'];


 $db=new mysqli('localhost','root','','products');
                $qry ="SELECT * FROM `products` WHERE `products`.`barcode`=".$barc;
                $Rs =$db->query($qry);
                $row = $Rs->fetch_object();
                    echo '
                    <div class="container" style="margin-top: 75px">
                        <div style="width: 800px;height: 600px;float: right;">
                            <h1>'.$row->pName.'</h1>
                            <form action="index.php" method="post">
                    
                            </form>
                        </div>
                        <img src="uploadImg/'.$row->pImg.'" style="float: left; height: 500px;width: 400px" alt="">
                    </div>
                    ';
?>