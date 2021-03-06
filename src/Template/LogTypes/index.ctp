<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Log Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logTypes index large-9 medium-8 columns content">
    <h3><?= __('Log Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Created') ?></th>
                <th><?= $this->Paginator->sort('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logTypes as $logType): ?>
            <tr>
                <td><?= $this->Number->format($logType->Id) ?></td>
                <td><?= h($logType->Name) ?></td>
                <td><?= h($logType->Created) ?></td>
                <td><?= h($logType->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logType->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logType->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logType->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $logType->Id)]) ?>
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
