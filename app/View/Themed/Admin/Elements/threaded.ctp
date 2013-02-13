<?php
  $controller = ucfirst($this->params->controller);
?>
<? if ($thread): ?>
      <?php foreach ($thread as $element): ?>
          <tr>
              <td id="rubric_<?= $element[$model]['id'] ?>" style="padding-left:<?= 16 + $level * 16 ?>px">
                  <?= $this->Html->image('/images/icons/16/open.png', array('alt' => $model)); ?>
                  <? if (!empty($current_cat[$model]['id']) && $current_cat[$model]['id'] == $element[$model]['id']): ?>
                      <span class="active" style="color:red;"><?= $element[$model]['title']; ?></span>
                  <? elseif ($element[$model]['active'] == 0): ?>
                      <a href="<?= $this->Html->url(array("controller" => $this->params->controller, "action" => "index", $element[$model]['id'])); ?>"><s><?= $element[$model]['title']; ?></s></a>
                  <? else: ?>
                      <a href="<?= $this->Html->url(array("controller" => $this->params->controller, "action" => "index", $element[$model]['id'])); ?>"><?= $element[$model]['title']; ?></a>
                  <? endif; ?> 
              </td>
              <?php if (CakeSession::read('Auth.User.role_id') == 0): ?>
                  <td style="width: 20px;">
                      <?= $this->Html->image('/images/icons/16/edit.png', array('class' => '', 'url' => '/admin/' . $this->request->controller . '/edit/' . $element[$model]['id'])); ?>  
                  </td>
                  <td style="width: 20px;">
                      <?=
                      $this->Form->postLink(
                              $this->Html->image('/images/icons/16/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $element[$model]['id']), array('escape' => false, 'confirm' => __('Удаляем ' . $element[$model]['title'] . '?', $element[$model]['id']))
                      );
                      ?>
                  </td>
              <?php endif; ?>
          </tr>
          <?= $this->element('threaded', array('thread' => $element['children'], 'model' => $model, 'level' => $level + 1)); ?>
      <?php endforeach; ?> 
  <? endif; ?>