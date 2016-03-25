<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $log->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $log->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Log'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="log form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Edit Log') ?></legend>
        <?php
            echo $this->Form->input('Event_id', ['options' => $events]);
            echo $this->Form->input('LogType_id', ['options' => $logTypes]);
            echo $this->Form->input('Timestamp', ['empty' => true]);
            echo $this->Form->input('Note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
