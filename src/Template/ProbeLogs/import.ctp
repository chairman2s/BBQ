<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Probe Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probeLogs form large-9 medium-8 columns content">
    <?= $this->Form->create($probeLog,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Probe Log from iGrill Mini') ?></legend>

        <?php
                echo $this->Form->input('Events_id', ['options' => $events]);    
                echo $this->Form->input('CSVFile', ['type' => 'file',
                                        'label' => [
                                                    'class' => 'thingy',
                                                    'text' => 'Remember to name the probe in the app as the same as here'
                                                    ]]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
