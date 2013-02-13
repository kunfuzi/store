<?php echo $this->Form->create('Category', array('type' => 'file', 'inputDefaults' => array('label' => false, 'div' => false))); ?>
<?= $this->Form->input('id'); ?>

<div class="block small left" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Категория</h2>
    </div>		<!-- .block_head ends -->

    <div class="block_content">

        <p>
            <?= $this->Form->input('parent_id', array('class' => 'select', 'style' => 'width:98%', 'label' => 'Родительская категория', 'escape' => false)); ?>
        </p>

        <p>
            <?= $this->Form->input('title', array('class' => 'required text', 'label' => 'Наименование директории *')); ?>
        </p>

        <p>
            <?= $this->Form->checkbox('active'); ?>
            <?= $this->Form->label('Active', ' Категория активна'); ?>
        </p>

        <hr />

        <p>
            <input type="submit" class="submit long" value="Сохранить" />
        </p>
        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<div class="block small right" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Описание</h2>
    </div>		<!-- .block_head ends -->

    <div class="block_content">
        <p>

            <?= $this->Form->input('description'); ?>
        </p>


        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<?= $this->Form->end; ?>