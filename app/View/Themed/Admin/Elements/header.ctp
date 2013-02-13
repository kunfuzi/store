<div id="header"> <!-- #header begins -->
    <div class="hdrl"></div>
    <div class="hdrr"></div>
    <h1><a href="/">Интернет-аптека</a></h1>

    <ul id="nav">
        <?php if (CakeSession::read('Auth.User.role_id') == 0): ?>

              <li><?= $this->Html->link('Категории', array('controller' => 'categories')); ?></li>
              <li><?= $this->Html->link('Препараты', array('controller' => 'preparats')); ?></li>
              <li>
                  <?= $this->Html->link('Страницы', array('controller' => 'pages')); ?>
              </li>
              <li>
                  <?= $this->Html->link('Блоки', "#"); ?>
                  <ul>
                      <li> <?= $this->Html->link('Статические блоки', array('controller' => 'stexts', 'action' => 'index')); ?></li>
                      <li> <?= $this->Html->link('Слайдшоу', array('controller' => 'slideshows', 'action' => 'index')); ?></li>
                  </ul>
              </li>
          <?php endif; ?>
        <li>
            <?= $this->Html->link('Поиск', array('controller' => 'search', 'action' => 'index')); ?>
        </li>
        <?php if (CakeSession::read('Auth.User.role_id') == 0): ?>
              <li>
                  <?= $this->Html->link('Настройки', '#'); ?>
                  <ul>
                      <li> <?= $this->Html->link('Сайта', array('controller' => 'settings', 'action' => 'edit')); ?></li>
                      <li> <?= $this->Html->link('Пользователи', array('controller' => 'users', 'action' => 'index')); ?></li>
                  </ul>
              </li>
          <?php endif; ?>

    </ul>

    <p class="user">
        Здравствуйте, <?= "{$this->Session->read('Auth.User.lastname')} {$this->Session->read('Auth.User.firstname')}" ?> | 
        <?= $this->Html->link('Выход', array('controller' => 'users', 'action' => 'logout')); ?></p>

</div> <!-- #header ends -->