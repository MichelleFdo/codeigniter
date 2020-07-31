<?php include_once("header.php");?>
  <div class='container'>
    <?php echo form_open("welcome/change/{$product->p_Id}", ['class'=>'form-horizontal']); ?>  
      <fieldset>
        <legend><h3> Update Product </h3></legend>

        <div class="form-group row">
          <label for="p_Id" class="col-sm-2 col-form-label">Product ID</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control-plaintext" id="p_Id" value=""> -->
            <?php echo form_input(['name'=>'Product Id','id'=>'p_Id','class'=>'form-control-plaintext', 'value'=>set_value('p_Id',$product->p_Id)]); ?>
          </div>
          <div class="col-sm-10">
            <?php echo form_error('p_Id','<div class="text-danger">', '<div>');?>
          </div>
        </div>

        <div class="form-group row">
          <label for="p_name" class="col-sm-2 col-form-label">Product Name</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control-plaintext" id="p_name" value="">-->
            <?php echo form_input(['name'=>'Product Name','id'=>'p_name', 'class'=>'form-control-plaintext']); ?>
          </div>
          <div class="col-sm-10">
            <?php echo form_error('p_name','<div class="text-danger">', '<div>');?>
          </div>
        </div>

        <div class="form-group row">
          <label for="image" class="col-sm-2 col-form-label">Image</label>
          <div class="col-sm-10">
          <!-- <input type="file" class="form-control-file" id="image" aria-describedby="fileHelp">-->
          <?php echo form_upload(['name'=>'Product Image','id'=>'image','class'=>'form-control-plaintext']); ?>
          <small id="fileHelp" class="form-text text-muted">Choose file to add</small>
          </div>
        </div>
      
        <div class="form-group row">
          <label for="price" class="col-sm-2 col-form-label">Price</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control-plaintext" id="price" value="">-->
            <?php echo form_input(['name'=>'Product Price','id'=>'price','class'=>'form-control-plaintext']); ?>
          </div>
        </div>

        <div class="form-group row">
          <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
          <div class="col-sm-10">
            <!-- <input type="text" class="form-control-plaintext" id="quantity" value="">-->
            <?php echo form_input(['name'=>'Product Quantity','id'=>'quantity','class'=>'form-control-plaintext']); ?>
          </div>
          <div class="col-sm-10">
            <?php echo form_error('quantity','<div class="text-danger">', '<div>');?>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <!-- <button type="submit" class="btn btn-primary">Submit</button>-->
            <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class'=>'btn btn-primary']); ?>
            <!-- <button type="reset" class="btn btn-info">Cancel</button> -->
            <?php echo form_reset(['name'=>'reset', 'value'=>'Reset', 'class'=>'btn btn-info']); ?>
            <?php echo anchor('welcome','Back',['class'=>'btn btn-success']); ?>
          </div>
        </div>
        
      </fieldset>
    <?php echo form_close(); ?>
  </div>
<?php include_once("footer.php"); ?>