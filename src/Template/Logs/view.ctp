<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Log Types'), ['controller' => 'LogTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Type'), ['controller' => 'LogTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logs view large-9 medium-8 columns content">
    <h3><?= h($log->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Event') ?></th>
            <td><?= $log->has('event') ? $this->Html->link($log->event->Name, ['controller' => 'Events', 'action' => 'view', $log->event->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Log Type') ?></th>
            <td><?= $log->has('log_type') ? $this->Html->link($log->log_type->Name, ['controller' => 'LogTypes', 'action' => 'view', $log->log_type->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($log->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Timestamp') ?></th>
            <td><?= h($log->Timestamp) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($log->Created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($log->Modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($log->Note)); ?>
    </div>
</div>
