<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lands'), ['controller' => 'Lands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Land'), ['controller' => 'Lands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admins view large-9 medium-8 columns content">
    <h3><?= h($admin->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($admin->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($admin->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pass') ?></th>
            <td><?= h($admin->pass) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($admin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($admin->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remarks') ?></h4>
        <?= $this->Text->autoParagraph(h($admin->remarks)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Lands') ?></h4>
        <?php if (!empty($admin->lands)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Admin Id') ?></th>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Acre') ?></th>
                <th scope="col"><?= __('Kanal') ?></th>
                <th scope="col"><?= __('Marla') ?></th>
                <th scope="col"><?= __('Location') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Khewat') ?></th>
                <th scope="col"><?= __('Khasra') ?></th>
                <th scope="col"><?= __('Patwar Halka') ?></th>
                <th scope="col"><?= __('Best For') ?></th>
                <th scope="col"><?= __('Demand') ?></th>
                <th scope="col"><?= __('Sale') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Purchased') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($admin->lands as $lands): ?>
            <tr>
                <td><?= h($lands->admin_id) ?></td>
                <td><?= h($lands->id) ?></td>
                <td><?= h($lands->name) ?></td>
                <td><?= h($lands->type) ?></td>
                <td><?= h($lands->acre) ?></td>
                <td><?= h($lands->kanal) ?></td>
                <td><?= h($lands->marla) ?></td>
                <td><?= h($lands->location) ?></td>
                <td><?= h($lands->city) ?></td>
                <td><?= h($lands->khewat) ?></td>
                <td><?= h($lands->khasra) ?></td>
                <td><?= h($lands->patwar_halka) ?></td>
                <td><?= h($lands->best_for) ?></td>
                <td><?= h($lands->demand) ?></td>
                <td><?= h($lands->sale) ?></td>
                <td><?= h($lands->cost) ?></td>
                <td><?= h($lands->remarks) ?></td>
                <td><?= h($lands->purchased) ?></td>
                <td><?= h($lands->status) ?></td>
                <td><?= h($lands->created) ?></td>
                <td><?= h($lands->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lands', 'action' => 'view', $lands->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lands', 'action' => 'edit', $lands->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lands', 'action' => 'delete', $lands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lands->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
