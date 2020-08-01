<?php include_once("header.php");?>
    <div class="container">       
        <table class="table table-hover">
            <thead>
                <tr class="table-info">
                    <th colspan=2 scope="col"> <h3> View Product <h3></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr><td colspan=2><?php echo $product[0]->image; ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Product Id :</td>
                    <td><?php echo $product[0]->p_Id; ?></p></td>
                </tr>
                <tr>
                    <td>Product Name :</td>
                    <td><?php echo $product[0]->p_name; ?></p></td>
                </tr>
                <tr>
                    <td>Price: </td>
                    <td><?php echo $product[0]->price; ?></p></td>
                </tr>
                <tr>
                    <td>Quantity :</td>
                    <td><?php echo $product[0]->quantity; ?></p></td>
                </tr>
            </tbody>
        </table>
        <?php echo anchor('welcome','Back',['class'=>'btn btn-info']); ?>
    </div>

<?php include_once("footer.php"); ?>