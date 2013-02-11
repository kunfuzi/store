
<div class="block full">

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2><?= $head?></h2>

        <ul>
            <li class="nobg"><a href="/admin/<?= $this->request->controller ?>/lib_edit">Добавить</a></li>
        </ul>
    </div>		<!-- .block_head ends -->

    <div class="block_content">


        <h2></h2>
        <table style="width: 100%;">
            <?php foreach ($array as $value): ?>
                <tr>
                    <td style="width: 20px;">
                        <?php
                        if ($value[$model]['active'] == true)
                            echo $this->Html->image('/images/icons/16/bullet-green.png');
                        else
                            echo $this->Html->image('/images/icons/16/bullet-red.png');
                        ?>
                    </td>
                    <td><?= $this->Html->link($value[$model]['title'], '/admin/' . $this->request->controller . '/lib_edit/' . $value[$model]['id']) ?></td>
                    <td style="width: 20px;">
                        <?php
                        echo $this->Html->image('/images/icons/16/delete.png', array('class' => 'lib_delete', 'url' => '/admin/' . $this->request->controller . '/lib_del/' . $value[$model]['id']));
                        ?>  
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
    <!-- .block_content ends -->
</div>







