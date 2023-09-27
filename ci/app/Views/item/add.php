<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h4>Asset Management Information System</h4>
		<h5>Add Item</h5>
		<a class="btn btn-primary" href="<?=base_url()?>item/index" role="button">Back</a>
		<div class="row">
			<form action="<?=base_url()?>item/add" method="POST">
				<?php if(isset($validation)): ?>
					<div class="alert alert-danger" role="alert">
 					 <?= $validation->listErrors()?>
					</div>
				<?php endif; ?>
		
			  <div class="form-group row">
			    <label for="name" class="col-1 col-form-label">Name</label> 
			    <div class="col-7">
			      <input id="name" name="name" value="<?=set_value('name')?>"  placeholder="Item Name" type="text" class="form-control">
			    </div>
				<!-- <div class="col-4">
					<?php if(validation_show_error('name')): ?>
						<div class="alert alert-danger" role="alert">
						<?= validation_show_error('name')?>
						</div>
					<?php endif; ?>
			  </div> -->
			  <div class="form-group row">
			    <label for="price" class="col-1 col-form-label">Price</label> 
			    <div class="col-7">
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text">PHP</div>
			        </div> 
			        <input id="price" name="price" value="<?=set_value('price')?>" placeholder="0" type="text" class="form-control" >
					</div>
						<!-- <div class="col-4">
						<?php if(validation_show_error('price')): ?>
							<div class="alert alert-danger" role="alert">
							<?= validation_show_error('price')?>
							</div>
						<?php endif; ?>
						</div> -->
			  </div>
			  <div class="form-group row">
			    <label for="description" class="col-1 col-form-label">Description</label> 
			    <div class="col-7">
			      <textarea id="description" name="description" cols="40" rows="5" class="form-control"><?=set_value('description')?></textarea>
			    </div>
				<!-- <div class="col-4">
					<?php if(validation_show_error('description')): ?>
						<div class="alert alert-danger" role="alert">
						<?= validation_show_error('description')?>
						</div>
					<?php endif; ?>
			    </div> -->

			  </div> 
			  <div class="form-group row">
			    <div class="offset-4 col-8">
			      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
			    </div>
			  </div>
			</form>

		</div>
	</div>

<?= $this->endSection('content') ?>
	
