<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
        <?php if ($this->fetch('title') != ''){?>
     <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>   
        <?php } ?>
    <?= $this->Form->create($equipment) ?>
    <fieldset>
        <legend><?= __('Add Equipment') ?></legend>
        <?php
            echo $this->Form->input('HeatSource_id', ['options' => $heatSources]);
            echo $this->Form->input('Name');
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
