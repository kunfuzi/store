<?=
$this->Form->create('Setting', array('action' => 'save', 'inputDefaults' => array('label' => false, 'div' => false)));
?>
<div class="block" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Товары</h2>
        <ul>
            <li>
                <?= $this->Html->link('Все', array('action' => 'index'), array('class' => '')); ?>
            </li>
            <li>
                <?= $this->Html->link('C карточками', array('show' => 'card'), array('class' => '')); ?>
            </li>
            <li>
                <?= $this->Html->link('Без карточек', array('show' => 'no_card'), array('class' => '')); ?>
            </li>
        </ul>
    </div>		<!-- .block_head ends -->

    <div class="block_content">
        <? // pr($preparats) ?>
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <th width="10">&nbsp;</th>
                <th><?php echo $this->Paginator->sort('namec', 'Наименование'); ?></th>
                <th><?php echo $this->Paginator->sort('count_uid', 'Наличие'); ?></th>
                <th><?php echo $this->Paginator->sort('zavod', 'Производитель'); ?></th>
                <!--th class="actions"><?php echo __('Actions'); ?></th-->
            </tr>
            <?php foreach ($preparats as $preparat): ?>
                <tr>
                    <td>
                        <? if (isset($preparat['Product']['id'])): ?>
                            <?= $this->Html->image('/images/icons/16/information_s_a.png', array('alt' => '', 'title' => '')) ?>
                        <? else: ?>
                            &nbsp;
                        <? endif; ?>
                    </td>
                    <td>
                        <? if (!isset($preparat['Product']['id'])): ?>
                            <?= $this->Html->link(h($preparat['Preparat']['namec']), array('controller' => 'products', 'action' => 'edit', $preparat['Product']['id'], 'preparat_uid' => $preparat['Preparat']['uid']), array('class' => '')); ?>&nbsp;
                        <? else: ?>
                            <?= $this->Html->link(h($preparat['Product']['title']), array('controller' => 'products', 'action' => 'edit', $preparat['Product']['id'], 'preparat_uid' => $preparat['Preparat']['uid']), array('class' => '')); ?>&nbsp;
                        <? endif; ?>

                        <?= $this->Html->image('/images/icons/16/photo.png', array('alt' => 'Есть фото', 'title' => 'Есть фото')) ?>
                        <? if (isset($preparat['Product']['active']) && $preparat['Product']['active'] == 0): ?>
                            <?= $this->Html->image('/images/icons/16/bullet-red.png', array('alt' => 'Не активен', 'title' => 'Не активен')) ?>
                        <? endif; ?>
                        <? if (isset($preparat['Product']['spec']) && $preparat['Product']['spec'] == 1): ?>
                            <?= $this->Html->image('/images/icons/16/star_gold.png', array('alt' => 'Спецпредложение', 'title' => 'Спецпредложение')) ?>
                        <? endif; ?><br>
                    </td>
                    <td><?php echo h($preparat['0']['count_uid']); ?>&nbsp;</td>
                    <td><?php echo h($preparat['Preparat']['zavod']); ?>&nbsp;</td>
                    <!--td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $preparat['Preparat']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $preparat['Preparat']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $preparat['Preparat']['id']), null, __('Are you sure you want to delete # %s?', $preparat['Preparat']['id'])); ?>
                    </td--->
                </tr>
            <?php endforeach; ?>
        </table>
        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<?= $this->Form->end; ?>