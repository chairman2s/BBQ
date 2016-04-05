<!-- add.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Add Log') ?></legend>
        <?php
            echo $this->Form->input('Event_id', ['options' => $events]);
            echo $this->Form->input('LogType_id', ['options' => $logTypes]);
            echo $this->Form->input('Timestamp', ['empty' => true]);
            echo $this->Form->input('Note');
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
