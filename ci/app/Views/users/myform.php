<?= $this->extend('users/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h1>List of Items</h1>
		<a class="btn btn-primary" href="<?=base_url()?>users/add" role="button">Edit</a>
		<div class="row">
			<?= form_open('users/add')?>
			<?php
			$data = [
				'name'=> 'name',
				'id' => 'name',
				'value' => set_value('name'),
				'placeholder' = 'Item Name',
				'class' => 'form-control'
			];
			?>
			<?= form_input('name', set_value('name'))?>

			
			
		</div>
	</div>

<?= $this->endSection('content') ?>
	
