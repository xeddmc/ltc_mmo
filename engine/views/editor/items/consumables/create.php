<div class="pane">
	<div class="page-header">
		<h1>Create Consumable</h1>
	</div>
	<?=form_open(current_url(), 'class="form-horizontal"')?>
		<?=bootstrap_input('name', 'Name')?>
		<?=bootstrap_input('description', 'Description')?>
		<?=bootstrap_input('level', 'Level')?>
		<?=bootstrap_input('modified_amount', 'Modified Amount')?>
		<?=bootstrap_dropdown('classes', 'Classes',$classes)?>
		<?=bootstrap_input('stackable', 'Stackable')?>
		<?=bootstrap_input('image', 'Image')?>
		<?=bootstrap_input('cast_time', 'Cast Time')?>
		<legend>Attribute Points</legend>
		<?php foreach($attributes as $attr){ ?>
			<?=bootstrap_input(strtolower($attr->acronym), $attr->name.' +')?>
		<?php } ?>
		<div class="form-actions">
			<?=bootstrap_submit('submit', 'Create Item', 'class="btn btn-primary"')?>
			<a href="<?=base_url('editor/items/consumables')?>" class="btn">Cancel</a>
		</div>
	<?=form_close()?>
</div>