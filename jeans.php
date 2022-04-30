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
<body class="home" onload="setThehegit();" onresize="setThehegit()" style="background: #f5f5f5" >
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

<div style="display: none">
    <img src="imgs/col1.jpg">
    <img src="imgs/col2.jpg">
    <img src="imgs/col3.jpg">
    <img src="imgs/col4.jpg">
    <img src="imgs/col5.jpg">
    <img src="imgs/download.jpg">
</div>

<div class="container" >
    <div class="row" style="margin-top: 100px;display: flex; font-size: 20px ">
        <ul style="list-style-type: none;display: flex">
            <li >
                <a id="hov" href="index.php"> Home Page </a>
            </li>
            <li >
                <span> &nbsp> Jeans</span>
            </li>
        </ul>
    </div>
    <div class="spann" style="display: flex;">
        <span>Jeans</span>
    </div>

    <div class="department row" >
            <a href="men.php?type=jeans" id="jeans" >
                <img src="imgs/col4.jpg" alt="">
                <label for="a1" style="">Men</label>
            </a>
        <a href="woman.php?type=jeans" >
            <img src="imgs/col5.jpg" alt="">
            <label for="a1" style="">Woman</label>
        </a>
        <a href="children.php?type=jeans" >
            <img src="imgs/col3.jpg" alt="">
            <label for="a1" style="">Children</label>
        </a>
    </div>


    <?php
    $db=new mysqli('localhost','root','','products');
    if(!isset($_GET['pTybe'])) {
        $qry = "SELECT * FROM `products`";
        $Rs = $db->query($qry);
        echo "<div class='row' style='margin-top: 25px'>";
        while ($row = $Rs->fetch_object()) {
            if($row->pType=="jeans"){
            echo '
           <div class="col-md-3">
            <div class ="card" style="max-width: 350px;margin-bottom: 25px;margin-top: 25px;">
                <div class="card__relative">
                    <div class="justify-content-center">
                     <img src="uploadImg/'.$row->pImg.'" style="height: 200px" id="#imm" class="card-img img-in-card"width="200px"  alt="...">
                        <div onload="setThehegit()" class="img__hover">
                            <div class="title-card">'.$row->pName.'</div>
                            <p class="card-price"> '.$row->pPrice.'$</p>
                            <a class="btn btn-primary" href="productPage.php?barcode='.$row->barcode.'">Buy now</a>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">'.$row->pPrice.'<br>'.$row->barcode.'<br>'.$row->pFor.'</p>
                </div>
            </div>
        </div>
            ';
            }
        }
    }
    echo '</div>'
    ?>


</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script srr="node_modules/jquery/dist/jquery.slim.min.js"></script>


</body>
</html>
