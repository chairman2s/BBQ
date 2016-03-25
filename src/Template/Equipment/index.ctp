<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipment index large-9 medium-8 columns content">
    <h3><?= __('Equipment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('HeatSource_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $equipment): ?>
            <tr>
                <td><?= $this->Number->format($equipment->Id) ?></td>
                <td><?= $equipment->has('heat_source') ? $this->Html->link($equipment->heat_source->Name, ['controller' => 'HeatSources', 'action' => 'view', $equipment->heat_source->Id]) : '' ?></td>
                <td><?= h($equipment->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipment->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipment->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipment->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id)]) ?>
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
