<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Probe Log'), ['action' => 'edit', $probeLog->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Probe Log'), ['action' => 'delete', $probeLog->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $probeLog->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Probe Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Probe Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="probeLogs view large-9 medium-8 columns content">
    <h3><?= h($probeLog->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($probeLog->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Probes Id') ?></th>
            <td><?= $this->Number->format($probeLog->Probes_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Events Id') ?></th>
            <td><?= $this->Number->format($probeLog->Events_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= $this->Number->format($probeLog->Value) ?></td>
        </tr>
        <tr>
            <th><?= __('Timestamp') ?></th>
            <td><?= h($probeLog->Timestamp) ?></td>
        </tr>
    </table>
</div>
