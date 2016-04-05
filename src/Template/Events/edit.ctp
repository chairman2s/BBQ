<!-- Menu -->
<nav id="menu">
        <h2><?= __('Actions') ?></h2>
        <ul>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cuts'), ['controller' => 'Cuts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cut'), ['controller' => 'Cuts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
    </ul>
</nav>
 <div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Equipment'); ?></a></h1>
    </header>   
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->input('Name');
                 echo $this->Form->input('Date', array('type' => 'text'));
            echo $this->Form->input('Cut_id', ['options' => $cuts]);
            echo $this->Form->input('Equipment_id', ['options' => $equipment]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?php $this->html->scriptblock("$('#date').attr('type', 'datetime-local');", ['block' => 'Endscript']);?>
</div>