<div class="preparats view">
<h2><?php  echo __('Preparat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codeall'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['codeall']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codepart'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['codepart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Namec'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['namec']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seria'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['seria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ost'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['ost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zakaz'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['zakaz']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cenaopt'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['cenaopt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cenaoptm'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['cenaoptm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cenaoptk'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['cenaoptk']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cenarozn'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['cenarozn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summa'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['summa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cenands'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['cenands']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zavod'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['zavod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nds'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['nds']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reestr'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['reestr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nac'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Godnost'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['godnost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tiprozn'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['tiprozn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Narkn'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['narkn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('D Post'); ?></dt>
		<dd>
			<?php echo h($preparat['Preparat']['d_post']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Preparat'), array('action' => 'edit', $preparat['Preparat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Preparat'), array('action' => 'delete', $preparat['Preparat']['id']), null, __('Are you sure you want to delete # %s?', $preparat['Preparat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Preparats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preparat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($preparat['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Preparat Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($preparat['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['preparat_id']; ?></td>
			<td><?php echo $order['order_id']; ?></td>
			<td><?php echo $order['count']; ?></td>
			<td><?php echo $order['price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, __('Are you sure you want to delete # %s?', $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($preparat['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Preparat Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Index Page'); ?></th>
		<th><?php echo __('Tags'); ?></th>
		<th><?php echo __('Symptoms'); ?></th>
		<th><?php echo __('Ills'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($preparat['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['preparat_id']; ?></td>
			<td><?php echo $product['title']; ?></td>
			<td><?php echo $product['description']; ?></td>
			<td><?php echo $product['index_page']; ?></td>
			<td><?php echo $product['tags']; ?></td>
			<td><?php echo $product['symptoms']; ?></td>
			<td><?php echo $product['ills']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
