<?php include_once("header.php");?>
    <div class="container">
    <h1> View Product <h1>
        <h4>Product Name : <?php echo $product[0]->p_Id; ?></h4>
        <p>Product Id : <?php echo $product[0]->p_name; ?></p>
        <p>Image : <?php echo $product[0]->image; ?></p>
        <p>Price: <?php echo $product[0]->price; ?></p>
        <p>Quantity : <?php echo $product[0]->quantity; ?></p>
        <?php echo anchor('welcome','Back',['class'=>'btn btn-success']); ?>
    </div>
<?php include_once("footer.php"); ?>