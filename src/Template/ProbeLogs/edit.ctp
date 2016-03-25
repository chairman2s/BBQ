<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $probeLog->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $probeLog->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Probe Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probeLogs form large-9 medium-8 columns content">
    <?= $this->Form->create($probeLog) ?>
    <fieldset>
        <legend><?= __('Edit Probe Log') ?></legend>
        <?php
            echo $this->Form->input('Probes_id');
            echo $this->Form->input('Events_id');
            echo $this->Form->input('Value');
            echo $this->Form->input('Timestamp', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
