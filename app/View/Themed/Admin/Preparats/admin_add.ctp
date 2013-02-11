<div class="preparats form">
<?php echo $this->Form->create('Preparat'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Preparat'); ?></legend>
	<?php
		echo $this->Form->input('codeall');
		echo $this->Form->input('code');
		echo $this->Form->input('codepart');
		echo $this->Form->input('namec');
		echo $this->Form->input('seria');
		echo $this->Form->input('ost');
		echo $this->Form->input('zakaz');
		echo $this->Form->input('cenaopt');
		echo $this->Form->input('cenaoptm');
		echo $this->Form->input('cenaoptk');
		echo $this->Form->input('cenarozn');
		echo $this->Form->input('summa');
		echo $this->Form->input('cenands');
		echo $this->Form->input('zavod');
		echo $this->Form->input('nds');
		echo $this->Form->input('reestr');
		echo $this->Form->input('nac');
		echo $this->Form->input('godnost');
		echo $this->Form->input('tiprozn');
		echo $this->Form->input('narkn');
		echo $this->Form->input('d_post');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Preparats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
