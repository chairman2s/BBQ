<!-- add.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cuts'), ['controller' => 'Cuts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cut'), ['controller' => 'Cuts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
        <?php if ($this->fetch('title') != ''){?>
     <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>   
        <?php } ?>
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('Date', array('type' => 'text'));
            echo $this->Form->input('Cut_id', ['options' => $cuts]);
            echo $this->Form->input('Equipment_id', ['options' => $equipment]);
            //echo $this->Form->input('Created');
            //echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
        
      
</div>
</div>
<?php $this->html->scriptblock("$('#date').attr('type', 'datetime-local');", ['block' => 'Endscript']);?>
<!-- add.ctp end -->