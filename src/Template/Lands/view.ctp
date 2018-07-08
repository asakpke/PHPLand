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
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($land->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($land->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($land->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($land->created) ?></td>
        </tr>
    </table>
</div>
