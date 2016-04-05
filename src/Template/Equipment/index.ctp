<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Equipment'); ?></a></h1>
    </header>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('HeatSource_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Created') ?></th>
                <th><?= $this->Paginator->sort('Modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $equipment): ?>
            <tr>
                <td><?= $this->Number->format($equipment->Id) ?></td>
                <td><?= $equipment->has('heat_source') ? $this->Html->link($equipment->heat_source->Name, ['controller' => 'HeatSources', 'action' => 'view', $equipment->heat_source->Id]) : '' ?></td>
                <td><?= h($equipment->Name) ?></td>
                <td><?= h($equipment->Created) ?></td>
                <td><?= h($equipment->Modified) ?></td>
                <td><?= $equipment->has('user') ? $this->Html->link($equipment->user->Username, ['controller' => 'Users', 'action' => 'view', $equipment->user->id]) : '' ?></td>
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
