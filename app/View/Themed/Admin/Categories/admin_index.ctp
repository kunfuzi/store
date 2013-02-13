<div class="block small left" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Категории</h2>
        <ul>
            <li><?= $this->Html->link('Добавить', array('action' => 'edit'), array('class' => '')); ?></li>
        </ul>
    </div>		<!-- .block_head ends -->

    <div class="block_content">

        <table style="width: 100%;">
            <?= $this->element('threaded', array('thread' => $categories, 'level' => 0, 'model' => 'Category')) ?>
        </table>

        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>

<div class="block small right" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Товары</h2>

    </div>		<!-- .block_head ends -->

    <div class="block_content">

        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>