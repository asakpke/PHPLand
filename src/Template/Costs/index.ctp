<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cost[]|\Cake\Collection\CollectionInterface $costs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cost'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lands'), ['controller' => 'Lands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Land'), ['controller' => 'Lands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cost Cats'), ['controller' => 'CostCats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost Cat'), ['controller' => 'CostCats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="costs index large-9 medium-8 columns content">
    <h3><?= __('Costs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('land_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost_cat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($costs as $cost): ?>
            <tr>
                <td><?= $cost->has('land') ? $this->Html->link($cost->land->name, ['controller' => 'Lands', 'action' => 'view', $cost->land->id]) : '' ?></td>
                <td><?= $cost->has('cost_cat') ? $this->Html->link($cost->cost_cat->name, ['controller' => 'CostCats', 'action' => 'view', $cost->cost_cat->id]) : '' ?></td>
                <td><?= $this->Number->format($cost->id) ?></td>
                <td><?= $this->Number->format($cost->cost) ?></td>
                <td><?= h($cost->created) ?></td>
                <td><?= h($cost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cost->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cost->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cost->id)]) ?>
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
