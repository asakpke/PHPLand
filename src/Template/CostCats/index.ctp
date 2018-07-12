<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CostCat[]|\Cake\Collection\CollectionInterface $costCats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cost Cat'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="costCats index large-9 medium-8 columns content">
    <h3><?= __('Cost Cats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($costCats as $costCat): ?>
            <tr>
                <td><?= $this->Number->format($costCat->id) ?></td>
                <td><?= h($costCat->name) ?></td>
                <td><?= h($costCat->created) ?></td>
                <td><?= h($costCat->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $costCat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $costCat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $costCat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $costCat->id)]) ?>
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
