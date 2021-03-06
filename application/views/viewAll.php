<?php include_once("header.php"); ?>

<div class="container">

<h3> All Product List</h3>
<table class="table table-hover">
  <thead>
    <tr class="table-info">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price (Rs.)</th>
      <th scope="col">Quantity</th>
      
    </tr>
  </thead>
  <tbody>
  <?php if(count($products)): ?>
    <?php foreach($products as $product): ?>
    <tr>
      <td><?php echo $product->p_Id; ?></td>
      <td><?php echo $product->p_name; ?></td>
      <td><?php echo $product->price; ?></td>
      <td><?php echo $product->quantity; ?></td>
      
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td>No Records Found !</td>
      </tr>
    <?php endif; ?>
    </tbody>
</table> 
<?php echo anchor('welcome','Back',['class'=>'btn btn-info']); ?>
            
</div>
<<?php include_once("footer.php"); ?>