<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CostCat $costCat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $costCat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $costCat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cost Cats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Costs'), ['controller' => 'Costs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cost'), ['controller' => 'Costs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="costCats form large-9 medium-8 columns content">
    <?= $this->Form->create($costCat) ?>
    <fieldset>
        <legend><?= __('Edit Cost Cat') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('remarks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
