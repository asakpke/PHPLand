<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Land[]|\Cake\Collection\CollectionInterface $lands
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Land'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lands index large-9 medium-8 columns content">
    <form>
        <h3>
            <?= __('Lands') ?>
            <input id="search" name="search" autofocus>
            <!-- <a href="#">Advanced Search</a> -->
        </h3>
    </form>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?//= $this->Paginator->sort('admin_id') ?></th> -->
                <!-- <th scope="col"><?//= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <!-- <th scope="col"><?//= $this->Paginator->sort('acre') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('kanal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <!-- <th scope="col"><?//= $this->Paginator->sort('khewat') ?></th> -->
                <!-- <th scope="col"><?//= $this->Paginator->sort('khasra') ?></th> -->
                <!-- <th scope="col"><//?= $this->Paginator->sort('patwar_halka') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('demand') ?></th>
                <!-- <th scope="col"><//?= $this->Paginator->sort('sale') ?></th> -->
                <!-- <th scope="col"><?//= $this->Paginator->sort('cost') ?></th> -->
                <!-- <th scope="col"><?//= $this->Paginator->sort('purchased') ?></th> -->
                <!-- <th scope="col"><//?= $this->Paginator->sort('status') ?></th> -->
                <!-- <th scope="col"><//?= $this->Paginator->sort('created') ?></th> -->
                <!-- <th scope="col"><//?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lands as $land): ?>
            <tr>
                <!-- <td><?//= $land->has('admin') ? $this->Html->link($land->admin->name, ['controller' => 'Admins', 'action' => 'view', $land->admin->id]) : '' ?></td> -->
                <!-- <td><?//= $this->Number->format($land->id) ?></td> -->
                <td><?= h($land->name) ?></td>
                <td><?= h($land->type) ?></td>
                <!-- <td><?//= $this->Number->format($land->acre) ?></td> -->
                <td><?= $this->Number->format($land->kanal) ?></td>
                <td><?= $this->Number->format($land->marla) ?></td>
                <td><?= h($land->city) ?></td>
                <!-- <td><?//= h($land->khewat) ?></td> -->
                <!-- <td><?//= h($land->khasra) ?></td> -->
                <!-- <td><?//= h($land->patwar_halka) ?></td> -->
                <td><?= $this->Number->format($land->demand) ?></td>
                <!-- <td><?//= $this->Number->format($land->sale) ?></td> -->
                <!-- <td><?//= $this->Number->format($land->cost) ?></td> -->
                <!-- <td><?//= h($land->purchased) ?></td> -->
                <!-- <td><?//= h($land->status) ?></td> -->
                <!-- <td><?//= h($land->created) ?></td> -->
                <!-- <td><?//= h($land->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $land->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $land->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $land->id], ['confirm' => __('Are you sure you want to delete # {0}?', $land->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<script>

</script>