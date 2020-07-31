<?php include_once("header.php");?>
  <div class='container'>
    
    <form name='addform' class='form-horizontal' method='post'>  
      <fieldset>
        <legend><h3> Add Product </h3></legend>

        <div class="form-group row">
          <label for="p_Id" class="col-sm-2 col-form-label">Product ID</label>
          <div class="col-sm-10">
            <input type="text" name="p_Id" class="form-control-plaintext" value="">
          </div>
          <div class="col-sm-10">
            <?php echo form_error('p_Id','<div class="text-danger">', '<div>');?>
          </div>
        </div>

        <div class="form-group row">
          <label for="p_name" class="col-sm-2 col-form-label">Product Name</label>
          <div class="col-sm-10">
            <input type="text" name="p_name" class="form-control-plaintext" value="">
          </div>
          <div class="col-sm-10">
            <?php echo form_error('p_name','<div class="text-danger">', '<div>');?>
          </div>
        </div>

        <div class="form-group row">
          <label for="image" class="col-sm-2 col-form-label">Image</label>
          <div class="col-sm-10">
          <input type="file" name="image" class="form-control-file" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">Choose file to add</small>
          </div>
        </div>
      
        <div class="form-group row">
          <label for="price" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
            <input type="text" name="price" class="form-control-plaintext" value="">
          </div>
        </div>

        <div class="form-group row">
          <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
          <div class="col-sm-10">
            <input type="text" name="quantity" class="form-control-plaintext" value="">
          </div>
          <div class="col-sm-10">
            <?php echo form_error('quantity','<div class="text-danger">', '<div>');?>
          </div>
        </div>
        
        <div class="form-group row">
          <div class="col-sm-10">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-info']); ?>
            <?php echo anchor('welcome','Back',['class'=>'btn btn-success']); ?>
          </div>
        </div>
        
      </fieldset>
    <form>
  
  </div>
<?php include_once("footer.php"); ?>