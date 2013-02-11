<?= $this->Form->create('User', array('action' => 'edit')); ?>
<div class="block small left" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2>Пользователи -> редактировать / добавить</h2>
    </div>		

    <div class="block_content">
        <?= $this->Form->hidden('id', array('value' => $array['User']['id'])); ?>
        <p>          
            <?php
            echo $this->Form->checkbox('active', array('checked' => $array['User']['active']));
            echo $this->Form->label('Active', ' Активен');
            ?>
        </p>
        <p><?= $this->Form->input('email', array('label' => 'E-mail', 'class' => 'text necessary', 'type' => 'text', 'value' => $array['User']['email'])); ?>   </p>
        <p><?= $this->Form->input('lastname', array('label' => 'Фамилия', 'class' => 'text necessary', 'type' => 'text', 'value' => $array['User']['lastname'])); ?>   </p>
        <p><?= $this->Form->input('firstname', array('label' => 'Имя', 'class' => 'text necessary', 'type' => 'text', 'value' => $array['User']['firstname'])); ?>   </p>
        <p><?= $this->Form->input('contact', array('label' => 'Контактные данные', 'class' => 'text necessary', 'type' => 'text', 'value' => $array['User']['contact'])); ?>   </p>


        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<div class="block small right" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2></h2>
    </div>		<!-- .block_head ends -->

    <div class="block_content">
         <?php if ($array['User']['id'] != 1): ?>
            <p><?= $this->Form->input('role_id', array('label' => 'Группа', 'class' => 'select', 'default' => $array['User']['role_id'])); ?>   </p>
        <?php endif; ?>
        <p><?= $this->Form->input('password', array('label' => 'Пароль', 'class' => 'text', 'type' => 'password')); ?>   </p>
        <p><?= $this->Form->input('password_confirm', array('label' => 'Повторите ввод', 'class' => 'text', 'type' => 'password')); ?>   </p>
        <p><?= $this->Form->submit('Сохранить', array('class' => 'submit', 'type' => 'submit')); ?>   </p>

        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<?= $this->Form->end; ?>