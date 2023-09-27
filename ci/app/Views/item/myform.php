<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<div class="container">
		<h2>Asset Management Information System</h2>
		<a class="btn btn-primary" href="<?=base_url()?>item/add" role="button">Add</a>
		<div class="row">
			<?= form_open('item/add')?>
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
	
