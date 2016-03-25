<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Probe'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="probes index large-9 medium-8 columns content">
    <h3><?= __('Probes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($probes as $probe): ?>
            <tr>
                <td><?= $this->Number->format($probe->Id) ?></td>
                <td><?= h($probe->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $probe->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $probe->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $probe->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $probe->Id)]) ?>
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
