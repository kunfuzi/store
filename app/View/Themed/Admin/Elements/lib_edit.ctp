<?= $this->Form->create($model, array('action' => 'lib_save')); ?>
<div class="block small left" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2>Добавить / редактировать</h2>
    </div>		<!-- .block_head ends -->

    <div class="block_content">
        <p><?= $this->Form->hidden('id', array('value' => $array[$model]['id'])); ?>   </p>
        <p><?= $this->Form->input('title', array('label' => 'Наименование', 'class' => 'text necessary', 'type' => 'text', 'value' => $array[$model]['title'])); ?>   </p>
        <p>          
            <?php
            ($array[$model]['active'] == true) ? $active = array('checked' => 'checked') : $active = '';
            echo $this->Form->checkbox('active', $active);
            echo $this->Form->label('Active', ' Активен');
            ?>
        </p>
        <p><?= $this->Form->submit('Сохранить', array('class' => 'submit', 'type' => 'submit')); ?>   </p>

        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>



<?= $this->Form->end; ?>