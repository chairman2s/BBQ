<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Probe Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Probes'), ['controller' => 'Probes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['controller' => 'Probes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probeLogs index large-9 medium-8 columns content">
    <h3><?= __('Probe Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Probes_id') ?></th>
                <th><?= $this->Paginator->sort('Events_id') ?></th>
                <th><?= $this->Paginator->sort('Value') ?></th>
                <th><?= $this->Paginator->sort('Timestamp') ?></th>
                <th><?= $this->Paginator->sort('Created') ?></th>
                <th><?= $this->Paginator->sort('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($probeLogs as $probeLog): ?>
            <tr>
                <td><?= $this->Number->format($probeLog->Id) ?></td>
                <td><?= $probeLog->has('probe') ? $this->Html->link($probeLog->probe->Name, ['controller' => 'Probes', 'action' => 'view', $probeLog->probe->Id]) : '' ?></td>
                <td><?= $probeLog->has('event') ? $this->Html->link($probeLog->event->Name, ['controller' => 'Events', 'action' => 'view', $probeLog->event->Id]) : '' ?></td>
                <td><?= $this->Number->format($probeLog->Value) ?></td>
                <td><?= h($probeLog->Timestamp) ?></td>
                <td><?= h($probeLog->Created) ?></td>
                <td><?= h($probeLog->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $probeLog->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $probeLog->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $probeLog->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $probeLog->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
