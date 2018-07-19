<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Land $land
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Land'), ['action' => 'edit', $land->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Land'), ['action' => 'delete', $land->id], ['confirm' => __('Are you sure you want to delete # {0}?', $land->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Land'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lands view large-9 medium-8 columns content">
    <h3><?= h($land->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $land->has('admin') ? $this->Html->link($land->admin->name, ['controller' => 'Admins', 'action' => 'view', $land->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($land->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($land->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($land->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Khewat') ?></th>
            <td><?= h($land->khewat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Khasra') ?></th>
            <td><?= h($land->khasra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patwar Halka') ?></th>
            <td><?= h($land->patwar_halka) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($land->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($land->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acre') ?></th>
            <td><?= $this->Number->format($land->acre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kanal') ?></th>
            <td><?= $this->Number->format($land->kanal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marla') ?></th>
            <td><?= $this->Number->format($land->marla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demand') ?></th>
            <td><?= $this->Number->format($land->demand) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sale') ?></th>
            <td><?= $this->Number->format($land->sale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($land->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchased') ?></th>
            <td><?= h($land->purchased) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test') ?></th>
            <td><?= h($land->test) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($land->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($land->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Location') ?></h4>
        <?= $this->Text->autoParagraph(h($land->location)); ?>
    </div>
    <div class="row">
        <h4><?= __('Best For') ?></h4>
        <?= $this->Text->autoParagraph(h($land->best_for)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($land->remarks)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Costs') ?></h4>
        <?php if (!empty($land->costs)): ?>
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
            <?php foreach ($land->costs as $costs): ?>
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
