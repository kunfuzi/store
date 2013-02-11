<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Product'); ?></legend>
	<?php
		echo $this->Form->input('preparat_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('index_page');
		echo $this->Form->input('tags');
		echo $this->Form->input('symptoms');
		echo $this->Form->input('ills');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Preparats'), array('controller' => 'preparats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preparat'), array('controller' => 'preparats', 'action' => 'add')); ?> </li>
	</ul>
</div>
