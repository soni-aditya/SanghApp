<div class="well col-lg-2 col-md-2 col-md-2">
    <h3 class='text-center'><u><?= __('Actions') ?></u></h3>
    <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('Admin Pannel'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="col-lg-10 col-md-10 col-sm-10">
    <h3><?= __('Admins') ?></h3>
    <table class='table table-stripped'>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admins as $admin): ?>
            <tr>
                <td><?= $this->Number->format($admin->id) ?></td>
                <td><?= h($admin->firstname) ?></td>
                <td><?= h($admin->lastname) ?></td>
                <td><?= $this->Number->format($admin->phone) ?></td>
                <td><?= h($admin->email) ?></td>
                <td><?= h($admin->created) ?></td>
                <td><?= h($admin->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
