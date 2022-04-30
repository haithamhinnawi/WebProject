<?php


?>

<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<div class="container mt-3">
    <h2>Table Head Colors</h2>
    <p>You can use any of the contextual classes to only add a color to the table header:
    </p>
    <table class="table">
        <thead class="table-dark">
        <tr class="">
            <th >Bar code</th>
            <th >Product Name</th>
            <th>Product for </th>
            <th >Product type  </th>
            <th >Price </th>
            <th >Quantity</th>
            <th>Product Image </th>
            <th> operation </th>

        </tr>
        </thead>
        <tbody>
        <?php

          $db=new mysqli('localhost','root','','products');
            if(!isset($_GET['pTybe'])) {
                $qry ="SELECT * FROM `products`";
                $Rs =$db->query($qry);
                while ($row =$Rs->fetch_object()){
                    $imgPath="uploadImg/".$row->pImg
                    ?>


                    <tr style="height: 250px">
                        <td><?php echo $row->barcode; ?></td>
                        <td><?php echo $row->pName;?></td>
                        <td><?php echo $row->pFor;?> </td>
                        <td><?php echo $row->pType;?></td>
                        <td><?php echo $row->pPrice;?></td>
                        <td><?php echo $row->pQuantity;?></td>
                        <td><img style="height: 250px; width: 250px" src="<?php echo $imgPath;?>"></td>
                        <td><a href="" class="Edit">zxczxczxcxc</a></td>


                    </tr>


        <?php
            }
            $db->close();
            }?>


        </tbody>
    </table>
</div>
