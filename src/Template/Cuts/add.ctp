<!-- add.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Cuts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
        <?php if ($this->fetch('title') != ''){?>
     <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>   
        <?php } ?>
    <?= $this->Form->create($cut) ?>
    <fieldset>
        <legend><?= __('Add Cut') ?></legend>
        <?php
            echo $this->Form->input('Animal_id', ['options' => $animals]);
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
