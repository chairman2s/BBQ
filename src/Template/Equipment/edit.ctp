<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipment->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Equipment'); ?></a></h1>
    </header>
    <?= $this->Form->create($equipment) ?>
    <fieldset>
        <legend><?= __('Edit Equipment') ?></legend>
        <?php
            echo $this->Form->input('HeatSource_id', ['options' => $heatSources]);
            echo $this->Form->input('Name');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
