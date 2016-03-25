<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cut->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cut->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cuts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuts form large-9 medium-8 columns content">
    <?= $this->Form->create($cut) ?>
    <fieldset>
        <legend><?= __('Edit Cut') ?></legend>
        <?php
            echo $this->Form->input('Animal_id', ['options' => $animals]);
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
