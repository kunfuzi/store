<?php
//  pr($this->params->query);
  if (isset($this->params->query)) {
      $options = array();
      foreach ($this->params->query as $key => $param) {
          if ($key != 'url')
              $options['url']['?'][$key] = $param;
      }

      $this->Paginator->options($options);
  }
?>

<? if ($this->Paginator->counter(array('format' => '%count%')) > $this->Session->read('Settings.item_per_page')): ?>
      <div class="pagination right">

          <?= $this->Paginator->prev('«', null, null, array('class' => 'disabled', 'escape' => true)); ?>

          <?= $this->Paginator->numbers(array('before' => ' ', 'after' => '  ', 'first' => 'первая', 'last' => 'последняя', 'separator' => " ", 'tag' => 'span')); ?>

          <?= $this->Paginator->next('»', null, null, array('class' => 'disabled')); ?> 
      </div>  <!-- .pagination ends -->

  <? endif; ?>