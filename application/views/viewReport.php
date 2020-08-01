<?php include_once("header.php"); ?>

<div class="container">

<h3> Stock Report</h3>
<table class="table table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">Product ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Unit Price (Rs.)</th>
      <th scope="col">Quantity</th>
       <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  
  <?php 
    if(count($products)):
      $total=0;
      $totalcount=0;
      foreach($products as $product):
        
        echo "<tr>
                <td>$product->p_Id</td>
                <td>$product->p_name</td>
                <td>$product->price</td>
                <td>$product->quantity</td>
                <td>";
        $value=$product->price*$product->quantity;
        echo $value;
        $total=$total+$value;
        $totalcount+=$product->quantity;
        echo "</td>
              </tr>";
      endforeach;
        echo "<tr class='table-light'>
                <td colspan=3><h5>Total Item Count</h5></td>
                <td>$totalcount</td>
                <td></td>
              </tr>
              <tr class='table-active'>
                <td colspan=4><h4>Total Item Value</h4></td>
                <td>$total</td>
              </tr>";
      else:
        echo "<tr>
                <td>No Records Found !</td>
              </tr>";
      endif; ?>
    </tbody>
    
</table> 
<?php echo anchor('welcome','Back',['class'=>'btn btn-info']); ?>
            
</div>
<<?php include_once("footer.php"); ?>