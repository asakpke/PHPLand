<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Land $land
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $land->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $land->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lands'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lands form large-9 medium-8 columns content">
    <?= $this->Form->create($land) ?>
    <fieldset>
        <legend><?= __('Edit Land') ?></legend>
        <?php
            echo $this->Form->control('admin_id', ['options' => $admins]);
            echo $this->Form->control('name');
            echo $this->Form->control('type');
            echo $this->Form->control('acre');
            echo $this->Form->control('kanal');
            echo $this->Form->control('marla');
            echo $this->Form->control('location');
            echo $this->Form->control('city');
            echo $this->Form->control('khewat');
            echo $this->Form->control('khasra');
            echo $this->Form->control('patwar_halka');
            echo $this->Form->control('best_for');
            echo $this->Form->control('demand');
            echo $this->Form->control('sale');
            echo $this->Form->control('cost');
            echo $this->Form->control('remarks');
            echo $this->Form->control('purchased', ['empty' => true]);
            echo $this->Form->control('status');
            echo $this->Form->control('test', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
