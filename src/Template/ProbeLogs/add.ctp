<!-- add.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Probe Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
        <?php if ($this->fetch('title') != ''){?>
     <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>   
        <?php } ?>
    <?= $this->Form->create($probeLog) ?>
    <fieldset>
        <legend><?= __('Add Probe Log') ?></legend>
        <?php
            echo $this->Form->input('Probes_id', ['options' => $probes]);
            echo $this->Form->input('Events_id', ['options' => $events]);
            echo $this->Form->input('Value');
            echo $this->Form->input('Timestamp', ['empty' => true]);
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
