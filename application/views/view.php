<?php include_once("header.php"); ?>
    <div class="container">
    <h1> View Product <h1>
        <h4>Product Name : <?php echo $product->p_Id; ?></h4>
        <p>Product Id : <?php echo $product->p_name; ?></p>
        <p>Image : <?php echo $product->image; ?></p>
        <p>Price: <?php echo $product->price; ?></p>
        <p>Quantity : <?php echo $product->quantity; ?></p>
        <?php echo anchor('welcome','Back',['class'=>'btn btn-success']); ?>
    </div>
<?php include_once("footer.php"); ?>