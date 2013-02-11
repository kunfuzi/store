<div class="preparats index">
	<h2><?php echo __('Preparats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('codeall'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('codepart'); ?></th>
			<th><?php echo $this->Paginator->sort('namec'); ?></th>
			<th><?php echo $this->Paginator->sort('seria'); ?></th>
			<th><?php echo $this->Paginator->sort('ost'); ?></th>
			<th><?php echo $this->Paginator->sort('zakaz'); ?></th>
			<th><?php echo $this->Paginator->sort('cenaopt'); ?></th>
			<th><?php echo $this->Paginator->sort('cenaoptm'); ?></th>
			<th><?php echo $this->Paginator->sort('cenaoptk'); ?></th>
			<th><?php echo $this->Paginator->sort('cenarozn'); ?></th>
			<th><?php echo $this->Paginator->sort('summa'); ?></th>
			<th><?php echo $this->Paginator->sort('cenands'); ?></th>
			<th><?php echo $this->Paginator->sort('zavod'); ?></th>
			<th><?php echo $this->Paginator->sort('nds'); ?></th>
			<th><?php echo $this->Paginator->sort('reestr'); ?></th>
			<th><?php echo $this->Paginator->sort('nac'); ?></th>
			<th><?php echo $this->Paginator->sort('godnost'); ?></th>
			<th><?php echo $this->Paginator->sort('tiprozn'); ?></th>
			<th><?php echo $this->Paginator->sort('narkn'); ?></th>
			<th><?php echo $this->Paginator->sort('d_post'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($preparats as $preparat): ?>
	<tr>
		<td><?php echo h($preparat['Preparat']['id']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['codeall']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['code']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['codepart']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['namec']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['seria']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['ost']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['zakaz']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['cenaopt']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['cenaoptm']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['cenaoptk']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['cenarozn']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['summa']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['cenands']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['zavod']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['nds']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['reestr']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['nac']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['godnost']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['tiprozn']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['narkn']); ?>&nbsp;</td>
		<td><?php echo h($preparat['Preparat']['d_post']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $preparat['Preparat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preparat['Preparat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preparat['Preparat']['id']), null, __('Are you sure you want to delete # %s?', $preparat['Preparat']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Preparat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
