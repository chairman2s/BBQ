<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs index large-9 medium-8 columns content">
    <h3><?= __('Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Event_id') ?></th>
                <th><?= $this->Paginator->sort('LogType_id') ?></th>
                <th><?= $this->Paginator->sort('Timestamp') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= $this->Number->format($log->Id) ?></td>
                <td><?= $this->Number->format($log->Event_id) ?></td>
                <td><?= $this->Number->format($log->LogType_id) ?></td>
                <td><?= h($log->Timestamp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $log->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $log->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $log->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->Id)]) ?>
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
