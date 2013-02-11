
<?= $this->Session->flash(); ?>

<?= $this->Form->create('User', array('inputDefaults' => array('label' => false, 'div' => false))); ?>
<div class="block" style="background: #FFF; padding:0px; margin:0px;">
    <p>
        <label>Пользователь:</label> <br />
        <?= $this->Form->input('email', array('class' => 'text')); ?>
    </p>

    <p>
        <label>Пароль:</label> <br />
        <?= $this->Form->input('password', array('class' => 'text')); ?>
    </p>

    <?= $this->Form->submit('Войти', array('class' => 'submit')); ?>&nbsp;
</div>
<?= $this->Form->end(); ?>
