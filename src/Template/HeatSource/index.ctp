<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Heat Source'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="heatSource index large-9 medium-8 columns content">
    <h3><?= __('Heat Source') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($heatSource as $heatSource): ?>
            <tr>
                <td><?= $this->Number->format($heatSource->Id) ?></td>
                <td><?= h($heatSource->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $heatSource->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $heatSource->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $heatSource->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $heatSource->Id)]) ?>
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
