<div class="block small left" >

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>

        <h2>Категории</h2>
        <ul>
            <li><?= $this->Html->link('Добавить', array('action' => 'edit', 'parent_id' => isset($this->request->params['pass'][0]) ? $this->request->params['pass'][0] : 0)); ?></li>
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
        <table width="100%" >
            <tr>
                <th width="20"></th>
                <th></th>
                <th width="20"></th>
            </tr>
            <? foreach ($current_cat['CategoriesProduct'] as $product): ?>
                  <tr>
                      <td></td>
                      <td><?= h($product['Product']['title']) ?></td>
                      <td></td>
                  </tr>
              <? endforeach; ?>
        </table>
        <? pr($current_cat) ?>
        <!-- .block_content ends -->
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
</div>