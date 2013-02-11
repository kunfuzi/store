<?php echo $this->Form->create('Product', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
<?= $this->Form->input('id'); ?>
<?= $this->Form->hidden('preparat_uid'); ?>
<div class="block small left" >
    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2><a href="/admin/preparats/">Препараты </a> &rarr; <? empty($this->request->data['Product']['id']) ? print "Добавление"  : print "Редактор"  ?></h2>

        <ul class="tabs">
            <li class="nobg"><a href="#basic-tab">Общие</a></li>
            <li><a href="#advanced-tab">Расширенные</a></li>
        </ul>        

    </div>		<!-- .block_head ends -->

    <div class="block_content tab_content" id="basic-tab">

        <p><?= $this->Form->input("Preparat.namec", array('class' => 'text', 'readonly' => 'readonly', 'style' => 'color:#777;', 'label' => 'Наименование в 1С')) ?></p>

        <p><?= $this->Form->input('title', array('class' => 'text necessary', 'label' => 'Наименование в интернет-аптеке')); ?></p>

        <p><?= $this->Form->input('short_description', array('label' => 'Короткое описание')); ?></p>

        <label>Опции</label>
        <table style="width: 100%" class="inputs">
            <tr>
                <td>
                    <p>
                        <?= $this->Form->checkbox('active'); ?>
                        <?= $this->Form->label('Active', ' Активен'); ?>
                    </p>
                </td>
                <td>
                    <p>
                        <?= $this->Form->checkbox('require_recipe'); ?>
                        <?= $this->Form->label('Archive', ' Требует рецепта'); ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>
                        <?= $this->Form->checkbox('spec'); ?>
                        <?= $this->Form->label('Spec', ' Спецпредложение'); ?>
                    </p>
                </td>
                <td>
                    <p>          
                        <?= $this->Form->checkbox('index_page'); ?>
                        <?= $this->Form->label('IndexPage', ' Выводить на главной'); ?>
                    </p>
                </td>
            </tr>
        </table>
        <br>
    </div>

    <div class="block_content tab_content" id="advanced-tab">
        <p><?= $this->Form->input('slug', array('class' => 'text necessary', 'label' => 'Транскрипция')); ?></p>
        <p><?= $this->Form->input('html_title', array('class' => 'text necessary', 'label' => 'HTML Title')); ?></p>
        <p><?= $this->Form->input('html_keywords', array('class' => 'text necessary', 'label' => 'HTML Keywords')); ?></p>
        <p><?= $this->Form->input('html_description', array('class' => 'text necessary', 'label' => 'HTML Description')); ?></p>
    </div>

    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<div class="block small right" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2>Разное</h2>

        <ul class="tabs">
            <li class="nobg"><a href="#analogs">Аналоги</a></li>
            <li><a href="#tags">Теги</a></li>
            <li><a href="#ills">Болезни</a></li>
            <li><a href="#symptoms">Симптомы</a></li>
        </ul>

    </div>		<!-- .block_head ends -->

    <div class="block_content tab_content" id="analogs">
        <? // pr($this->request->data) ?>
        <table width="100%">
            <tr>
                <td>
                    <input type="hidden" id="link_search_id">
                    <!--<input type="hidden" id="link_search_price">-->
                    <input class="text" value="" id="link_search_text">
                </td>
                <td width="20%">
                    <button type="button" class="submit" id="link_add_button">Добавить</button>
                </td>
            </tr>
        </table>
        <table width="100%" id="link_table_content">
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th width="20"><?= $this->Html->image('/images/icons/16/delete.png', array('alt' => 'Удалить', 'title' => 'Удалить')) ?></th>
                </tr>
            </thead>
            <tbody>
                <? if (isset($this->request->data['Analog'])): ?>
                    <? foreach ($this->request->data['Analog'] as $link): ?>
                        <tr>
                            <?= $this->Form->hidden("Analog.{$link['id']}.id", array('value' => $link['id'])); ?>
                            <?= $this->Form->hidden("Analog.{$link['id']}.preparat_uid", array('value' => $link['Preparat']['uid'])); ?>
                            <td><?= $link['Preparat']['namec'] ?></td>
                            <td align="center">
                                <?= $this->Form->checkbox("Analog.{$link['id']}.delete") ?>
                            </td>
                        </tr>
                    <? endforeach; ?>
                <? endif; ?>
            </tbody>
        </table>

        <!-- .block_content ends -->
    </div>

    <div class="block_content tab_content" id="tags">

        <p>
            <label>Добавить тег</label>
            <input class="text" value="">
        </p>

        <!-- .block_content ends -->
    </div>

    <div class="block_content tab_content" id="ills">

        <p>
            <label>Добавить болезнь</label>
            <input class="text" value="">
        </p>

        <!-- .block_content ends -->
    </div>

    <div class="block_content tab_content" id="symptoms">

        <p>
            <label>Добавить симптом</label>
            <input class="text" value="">
        </p>

        <!-- .block_content ends -->
    </div>

    <div class="bendl"></div>
    <div class="bendr"></div>
</div>


<div class="block">

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2>Описание</h2>        
    </div>		<!-- .block_head ends -->

    <div class="block_content">
        <? pr($this->request->data); ?>
        <p>
            <?= $this->Cksource->ckeditor('Product.description', array('value' => $this->request->data['Product']['description'], 'escape' => false)); ?>
        </p>
    </div>

    <div class="bendl"></div>
    <div class="bendr"></div>

</div>		<!-- .block ends -->

<?php //-----------------------------БЛОК  КАРТИНОК-----------------------------  ?>
<div class="block">

    <div class="block_head">
        <div class="bheadl"></div>

        <div class="bheadr"></div>

        <h2><?= __('Изображения') ?></h2>        

        <ul class="tabs">

            <li class="nobg active"><a href="#images"><?= __('Изображения') ?></a></li>

            <li><a href="#add_images"><?= __('Добавить') ?></a></li>

        </ul>

    </div>		<!-- .block_head ends -->

    <div class="block_content tab_content" id="images">
        <? /* //pr($array)   ?>
          <?
          $i = 1;
          if (!isset($array))
          $array['Object_photo'] = array();
          ?>
          <? foreach ($array['Object_photo'] as $image): ?>
          <table width="100%">
          <tr>
          <td style="width: 300px;max-width: 300px;" valign="top">
          <h2>Фотография объекта №<?= $i ?></h2>


          <?
          $thumbnail = $this->PhpThumb->generate(
          array(
          'save_path' => WWW_ROOT . 'media/thumbs/300x225',
          'display_path' => '/media/thumbs/300x225',
          'error_image_path' => '/i/no-img-300x225.png',
          'src' => WWW_ROOT . $image['filename'],
          // From here on out, you can pass any standard phpThumb parameters
          'w' => 300,
          'h' => 225,
          'q' => 100,
          'zc' => 0
          )
          );
          ?>

          <?
          $thumbnailX = $this->PhpThumb->generate(
          array(
          'save_path' => WWW_ROOT . 'media/thumbs/800x600x2',
          'display_path' => '/media/thumbs/800x600x2',
          'error_image_path' => '/i/no-img-800x600.png',
          'src' => WWW_ROOT . $image['filename'],
          // From here on out, you can pass any standard phpThumb parameters
          'w' => 800,
          'h' => 600,
          'q' => 100,
          'zc' => 0
          )
          );
          ?>



          <?= $this->Html->link($this->Html->image($thumbnail['src'], array('style' => 'width:300px;')), $thumbnailX['src'], array('rel' => 'facebox', 'escape' => false)) ?>
          </td>
          <td style="width: 350px;max-width: 350px;">
          <?= $this->Form->input("Object_photo.{$image['id']}.id", array('value' => $image['id'], 'type' => 'hidden')); ?>
          <?= $this->Form->input("Object_photo.{$image['id']}.filename", array('value' => $image['filename'], 'type' => 'hidden')); ?>
          <?= $this->Form->input("Object_photo.{$image['id']}.title", array('value' => $image['title'], 'type' => 'text', 'class' => 'text', 'div' => array('class' => 'form'), 'label' => array('text' => __('Описание (Description)', true)))); ?>
          <?= $this->Form->input("Object_photo.{$image['id']}.weight", array('value' => $image['weight'], 'type' => 'text', 'class' => 'text little', 'div' => array('class' => 'form'), 'label' => array('text' => __('Ширина (Weight)', true)))); ?>
          <?= $this->Form->input("Object_photo.{$image['id']}.active", array('checked' => $image['active'], 'type' => 'checkbox', 'class' => 'checkbox', 'div' => array('class' => 'form'), 'label' => array('style' => 'display:inline;', 'text' => ' ' . __('Изображение активно', true)))); ?>
          <?= $this->Form->input("Object_photo.{$image['id']}.delete", array('checked' => false, 'type' => 'checkbox', 'class' => 'checkbox', 'div' => array('class' => 'form'), 'label' => array('style' => 'display:inline;', 'text' => ' ' . __('Удалить', true)))); ?>
          </td>
          </tr>
          </table>
          <? $i++; ?>
          <? endforeach; ?>
          </div>

          <div class="block_content tab_content" id="add_images">

          <?
          for ($i = 1; $i <= 5; $i++):
          ?>
          <h2>Добавить изображение <?= $i ?></h2>

          <? $uniq = uniqid() ?>

          <table >
          <tr>
          <td width="350">
          <?= $this->Form->label('Object_photo.label_filename', __('Выбор файла', true)) ?>
          <?= $this->Form->input("Object_photo.{$uniq}.filename", array('type' => 'file', 'class' => 'file', 'div' => array('class' => 'form'), 'label' => false)); ?>
          </td>
          <td>
          <?= $this->Form->input("Object_photo.{$uniq}.title", array('value' => false, 'type' => 'text', 'class' => 'text medium', 'style' => 'width:300px;', 'div' => array('class' => 'form'), 'label' => array('text' => __('Описание (Description)', true)))); ?>
          </td>
          <td>
          <?= $this->Form->input("Object_photo.{$uniq}.weight", array('value' => false, 'type' => 'text', 'class' => 'text little', 'div' => array('class' => 'form'), 'label' => array('text' => __('Ширина (Weight)', true)))); ?>
          </td>
          </tr>
          </table>

          <hr />
          <? endfor; */ ?>

        <br />

    </div>		<!-- .block_content ends -->


    <div class="block_content">
        <hr />

        <p>
            <input type="submit" class="submit long" value="Сохранить" />
        </p>
    </div>		<!-- .block_content ends -->

    <div class="bendl"></div>
    <div class="bendr"></div>

</div>		<!-- .block ends -->

<?= $this->Form->end; ?>