<?php include_once("header.php"); ?>

<img class="mish1" src="../uKnit/images/yarn.jpg" width=100% height= 200/>
<br/>
<br/>

<div class="container">

<?php echo anchor('welcome/add', 'Add New Product', ['class'=>'btn btn-outline-primary']);?>
<?php echo anchor('welcome/viewAll', 'View All Products', ['class'=>'btn btn-outline-info']);?>
<?php echo anchor('welcome/viewRepo', 'View Reports', ['class'=>'btn btn-outline-secondary']);?>
<br/>
<br/>

<?php if($msg = $this->session->flashdata('msg')):?>
  <?php echo $msg; ?>
<?php endif;?>
<br/>
<br/>
<h3> Product Details</h3>

<table class="table table-hover">
  <thead>
    <tr class="table-primary">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      
      <th scope="col">Product Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="table-light">
  <?php if(count($products)): ?>
    <?php foreach($products as $product): ?>
    <tr>
      <td><?php echo $product->p_Id; ?></td>
      <td><?php echo $product->p_name; ?></td>
      
      <td><?php echo $product->price; ?></td>
      <td><?php echo $product->quantity; ?></td>
      <td><?php echo anchor("welcome/view/{$product->p_Id}", 'View', ['class'=>'badge badge-info']);?>
          <?php echo anchor("welcome/update/{$product->p_Id}", 'Update', ['class'=>'badge badge-success']);?>
          <?php echo anchor("welcome/delete/{$product->p_Id}", 'Delete', ['class'=>'badge badge-danger']);?></td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td>No Records Found !</td>
      </tr>
    <?php endif; ?>
    </tbody>
</table> 
</div>
<<?php include_once("footer.php"); ?>