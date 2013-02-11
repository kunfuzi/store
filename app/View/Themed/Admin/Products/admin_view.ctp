<div class="products view">
<h2><?php  echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preparat'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['Preparat']['id'], array('controller' => 'preparats', 'action' => 'view', $product['Preparat']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($product['Product']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Index Page'); ?></dt>
		<dd>
			<?php echo h($product['Product']['index_page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tags'); ?></dt>
		<dd>
			<?php echo h($product['Product']['tags']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Symptoms'); ?></dt>
		<dd>
			<?php echo h($product['Product']['symptoms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ills'); ?></dt>
		<dd>
			<?php echo h($product['Product']['ills']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Preparats'), array('controller' => 'preparats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Preparat'), array('controller' => 'preparats', 'action' => 'add')); ?> </li>
	</ul>
</div>
