<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cost $cost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cost'), ['action' => 'edit', $cost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cost'), ['action' => 'delete', $cost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Costs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cost'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lands'), ['controller' => 'Lands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Land'), ['controller' => 'Lands', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cost Cats'), ['controller' => 'CostCats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cost Cat'), ['controller' => 'CostCats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="costs view large-9 medium-8 columns content">
    <h3><?= h($cost->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Land') ?></th>
            <td><?= $cost->has('land') ? $this->Html->link($cost->land->name, ['controller' => 'Lands', 'action' => 'view', $cost->land->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost Cat') ?></th>
            <td><?= $cost->has('cost_cat') ? $this->Html->link($cost->cost_cat->name, ['controller' => 'CostCats', 'action' => 'view', $cost->cost_cat->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($cost->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cost->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($cost->remarks)); ?>
    </div>
</div>
