<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CostCat $costCat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cost Cat'), ['action' => 'edit', $costCat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cost Cat'), ['action' => 'delete', $costCat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $costCat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cost Cats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cost Cat'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="costCats view large-9 medium-8 columns content">
    <h3><?= h($costCat->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($costCat->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($costCat->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($costCat->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($costCat->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Costs') ?></h4>
        <?php if (!empty($costCat->costs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Land Id') ?></th>
                <th scope="col"><?= __('Cost Cat Id') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($costCat->costs as $costs): ?>
            <tr>
                <td><?= h($costs->land_id) ?></td>
                <td><?= h($costs->cost_cat_id) ?></td>
                <td><?= h($costs->id) ?></td>
                <td><?= h($costs->cost) ?></td>
                <td><?= h($costs->remarks) ?></td>
                <td><?= h($costs->created) ?></td>
                <td><?= h($costs->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Costs', 'action' => 'view', $costs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Costs', 'action' => 'edit', $costs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Costs', 'action' => 'delete', $costs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $costs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
