<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h1>View Item</h1>
		<a class="btn btn-primary" href="<?=base_url()?>item/index" role="button">Back</a>
		<div class="row">
			<form action="<?=base_url()?>item/destroy/<?=$item->id?>">
				<div class="form-group row">
			    <label for="name" class="col-4 col-form-label">ID</label> 
			    <div class="col-4">
			      <input id="name" name="name" value="<?= $item->id?>"  type="text" class="form-control" readonly>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="name" class="col-4 col-form-label">Name</label> 
			    <div class="col-8">
			      <input id="name" name="name" value="<?= $item->name?>"  type="text" class="form-control" readonly>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="price" class="col-4 col-form-label">Price</label> 
			    <div class="col-8">
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <div class="input-group-text">PHP</div>
			        </div> 
			        <input id="price" name="price" value="<?= $item->price?>" type="text" class="form-control" readonly>
			      </div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="description" class="col-4 col-form-label">Description</label> 
			    <div class="col-8">
			      <textarea id="description" name="description" cols="40" rows="5" class="form-control" readonly><?= $item->description?></textarea>
			    </div>
			  </div> 

			   <div class="form-group row">
			    <div class="offset-4 col-">
			    	Are you sure you want to delete this record?
			    	<button name="submit" type="submit" class="btn btn-primary">Yes</button>
			    </div>
			  </div> 
			</form>
		
		


		</div>
	</div>

<?= $this->endSection('content') ?>
	
