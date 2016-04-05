<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
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
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Cuts'); ?></a></h1>
    </header>   
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
