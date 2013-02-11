<div id="header"> <!-- #header begins -->
    <div class="hdrl"></div>
    <div class="hdrr"></div>
    <h1><a href="/">Ковчег33</a></h1>

    <ul id="nav">
        <?php if (CakeSession::read('Auth.User.role_id') == 0): ?>

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
            <?= $this->Html->link('Объявления', array('controller' => 'categories', 'action' => 'index')); ?>
        </li>
        <li>
            <?= $this->Html->link('Справочники', '#'); ?>
            <ul>
                <?php if (CakeSession::read('Auth.User.role_id') == 0): ?>
                      <li><?= $this->Html->link('Пользователи', array('controller' => 'users', 'action' => 'index')); ?></li>
                      <li><?= $this->Html->link('Журнал операций', array('controller' => 'actionlog', 'action' => 'index')); ?></li>
                  <?php endif; ?>
                <li><?= $this->Html->link('Города', array('controller' => 'lib_Cities', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Районы', array('controller' => 'lib_areas', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Улицы', array('controller' => 'lib_streets', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Тип объекта', array('controller' => 'lib_type_objects', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Тип жилья', array('controller' => 'lib_housing_types', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Тип дома', array('controller' => 'lib_type_houses', 'action' => 'index')); ?></li>
                <li><?= $this->Html->link('Материалы', array('controller' => 'lib_materials', 'action' => 'index')); ?></li>
            </ul>
        </li>
        <li>
            <?= $this->Html->link('Поиск', array('controller' => 'search', 'action' => 'index')); ?>
        </li>
        <li>
            <?= $this->Html->link('Выгрузки', '#'); ?>
            <ul>
                <li><?= $this->Html->link('Все', array('controller' => 'export', 'action' => 'all')); ?></li>
                <li><?= $this->Html->link('Активные', array('controller' => 'export', 'action' => 'active')); ?></li>
                <li><?= $this->Html->link('Реклама', array('controller' => 'export', 'action' => 'index')); ?></li>
            </ul>

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