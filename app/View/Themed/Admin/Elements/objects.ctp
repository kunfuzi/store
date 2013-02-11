<?php
  //pr($objects);  die();
?>
<thead>
    <tr>
        <td width="16"><?= $this->Paginator->sort('Objects.id', 'Лот'); ?></td>
        <td width="16"><?= $this->Paginator->sort('Objects.active', 'Акт'); ?></td>
        <td width="16"><?= $this->Paginator->sort('Objects.spec', 'Спец'); ?></td>
        <td width="16">&nbsp;</td>
        <td width="16"><?= $this->Paginator->sort('Objects.newspaper', 'Газета'); ?></td>
        <td>Адрес</td>
        <td><?= $this->Paginator->sort('Objects.date', 'Cоздано'); ?></td>
        <td><?= $this->Paginator->sort('Objects.square', 'Площадь&nbsp;м²', array('escape' => false)); ?></td>
        <td><?= $this->Paginator->sort('Objects.price', 'Стоимость'); ?></td>
        <td width="16">&nbsp;</td>
        <td width="16">&nbsp;</td>
    </tr>
</thead>

<tbody>
    <?php foreach ($objects as $value): ?>
          <tr id="object_<?= $value['Objects']['id'] ?>">
              <td><?= $value['Objects']['id'] ?></td>
              <td style="width:16px;padding: 0;text-align: center;">
                  <? if ($value['Objects']['archive'] == true) : ?>
                      <?= $this->Html->image('/images/icons/16/bullet-orange.png', array('title' => 'Сдано')); ?>
                  <? elseif ($value['Objects']['active'] == true) : ?>
                      <?= $this->Html->image('/images/icons/16/bullet-green.png', array('title' => 'Активно')); ?>
                  <? elseif ($value['Objects']['active'] == false) : ?>
                      <?= $this->Html->image('/images/icons/16/bullet-red.png', array('title' => 'Не активно')); ?>
                  <? endif; ?>
              </td>
              <td style="width: 16px;padding: 0;text-align: center;">
                  <? if ($value['Objects']['spec'] == true) : ?>
                      <?= $this->Html->image('/images/icons/16/star_gold.png', array('title' => 'Спецпредложение')); ?>
                  <? else: ?>
                      <?= $this->Html->image('/images/icons/16/star_grej.png', array('title' => 'Не является спецпредложением')); ?>
                  <? endif; ?>
              </td>
              <td style="width: 16px;padding: 0;text-align: center;">
                  <? if (!empty($value['Object_photo'])) : ?>
                      <?= $this->Html->image('/images/icons/16/picture.png', array('title' => 'Газета')); ?>
                  <? else: ?>
                      <?= $this->Html->image('/images/icons/16/checkbox_no.png', array('title' => 'Газета')); ?>
                  <? endif; ?>
              </td>
              <td style="width: 16px;padding: 0;text-align: center;">
                  <?= $this->Form->checkbox('export', array('checked' => $value['Objects']['export'], 'class' => 'checkbox addExport')); ?>
              </td>
              <td>
                  <?php $kv = isset($value['Objects']['num_apartment']) ? ', кв.' . $value['Objects']['num_apartment'] : '' ?>

                  <?
                  $line = array(
                      $value['LibCity']['title'],
                      $value['LibArea']['title'],
                      $value['LibStreet']['title'],
                      'д.' . $value['Objects']['num_house']
                  );
                  $line = array_diff($line, array(''));
                  ?>
                  <?= $this->Html->link(implode(', ', $line) . $kv, '/admin/objects/edit/' . $value['Objects']['id'], array('target' => '_blank')) ?></td>
              <td><?= $value['Objects']['date_virtual'] ?></td>

              <td>
                  <? if (isset($value['Space'][0])): ?>
                      <? if (count($value['Space']) > 1): ?>
                          от <?= $value['Space'][0]['total_area'] ?>
                      <? else: ?>
                          <?= $value['Space'][0]['total_area'] ?>
                      <? endif; ?>
                      <?= $value['LibUnit']['name'] ?><br>
                  <? endif; ?>              
              </td>
              <td style="white-space: nowrap">
                  <? if (isset($value['Space'][0]) && $value['Space'][0]['total_price']): ?>
                      <? if (count($value['Space']) > 1): ?>
                          от <?= number_format($value['Space'][0]['total_price'], 0, ',', ' '); ?>
                      <? else: ?>
                          <?= number_format($value['Space'][0]['total_price'], 0, ',', ' '); ?>
                      <? endif; ?>
                  <? else: ?>
                      <?= number_format($value['Objects']['price'], 0, ',', ' '); ?>
                  <? endif; ?>                  
              </td>
              <td style="width: 16px;padding: 0;text-align: center;">
                  <?= $this->Html->image('/images/icons/16/list.png', array('url' => '/admin/Objects/view/' . $value['Objects']['id'])); ?>
              </td>
              <td style="width: 16px;padding: 0;text-align: center;">
                  <?= $this->Html->image('/images/icons/16/delete.png', array('class' => 'lib_delete', 'url' => '/admin/Objects/del/' . $value['Objects']['id'] . '/' . strtolower($this->request->controller) . '/' . @$current_cat['Category']['id'])); ?>
              </td>
          </tr>
      <?php endforeach; ?>
    <?php if (empty($objects)): ?>
      <td>&nbsp;</td>
      <td>Объектов нет...</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
  <?php endif; ?>
</tbody> 








