<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cost $cost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Costs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lands'), ['controller' => 'Lands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Land'), ['controller' => 'Lands', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cost Cats'), ['controller' => 'CostCats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost Cat'), ['controller' => 'CostCats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="costs form large-9 medium-8 columns content">
    <?= $this->Form->create($cost) ?>
    <fieldset>
        <legend><?= __('Add Cost') ?></legend>
        <?php
            echo $this->Form->control('land_id', ['options' => $lands]);
            echo $this->Form->control('cost_cat_id', ['options' => $costCats]);
            echo $this->Form->control('cost');
            echo $this->Form->control('remarks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
