<div class="block">

    <div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        <h2>Пользователи</h2>

        <ul>
            <li class="nobg"><a href="/admin/users/edit">Добавить</a></li>
        </ul>
    </div>		<!-- .block_head ends -->

    <div class="block_content">


        <h2></h2>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>E-mail</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Должность</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $value): ?>
                    <tr>
                        <td><?= $value['User']['email'] ?></td>
                        <td><?= $value['User']['lastname'] ?></td>
                        <td><?= $value['User']['firstname'] ?></td>
                        <td>
                            <?php if ($value['User']['role_id'] == 0): ?>
                                Администратор
                            <?php else: ?>
                                Риелтор
                            <?php endif; ?>
                        </td>
                        <td style="width: 18px;">
                            <?= $this->Html->image('/images/icons/16/edit.png', array('title' => 'Редактировать', 'url' => '/admin/' . $this->request->controller . '/edit/' . $value['User']['id'])); ?>
                        </td>
                        <td style="width: 18px;">
                            <?php if ($value['User']['id'] != 1): ?>
                                <?= $this->Html->image('/images/icons/16/delete.png', array('class' => 'lib_delete', 'title' => 'Удалить', 'url' => '/admin/' . $this->request->controller . '/del/' . $value['User']['id'])); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Paginator->first('< Первая'); ?>&nbsp;
        <?= $this->Paginator->numbers(array('first' => 'First page')); ?>&nbsp;
        <?= $this->Paginator->last('Последняя >'); ?>&nbsp;
    </div>
    <div class="bendl"></div>
    <div class="bendr"></div>
    <!-- .block_content ends -->
</div>


