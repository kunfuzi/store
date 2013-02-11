<div class="block" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Продукты</h2>
        <ul>
            <li><?= $this->Html->link('Добавить', array('action' => 'edit'), array('class' => '')); ?></li>
        </ul>
    </div>		<!-- .block_head ends -->

    <div class="block_content">

        <? //pr($products) ?>
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th width="20">&nbsp;</th>
                <th width="300"><?php echo $this->Paginator->sort('Наименовение'); ?></th>
                <th><?php echo $this->Paginator->sort('Описание'); ?></th>
                <th>Привязок</th>
                <th width="20" class="actions">&nbsp;</th>
            </tr>
            <?php foreach ($products as $product): ?>
                  <tr>
                      <td>&nbsp;</td>
                      <td>
                          <?= $this->Html->link(h($product['Product']['title']), array('action' => 'edit', $product['Product']['id'])); ?>
                      </td>
                      <td><?= String::truncate(h(strip_tags($product['Product']['description']))); ?>&nbsp;</td>
                      <td><?= count($product['Productpreparat']) ?></td>
                      <td class="actions">
                          <?= $this->Form->postLink(__('Delete'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?>
                      </td>
                  </tr>
              <?php endforeach; ?>
        </table>
        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<!--div class="products index">
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
        <li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Preparats'), array('controller' => 'preparats', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Preparat'), array('controller' => 'preparats', 'action' => 'add')); ?> </li>
    </ul>
</div-->
