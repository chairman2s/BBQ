<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animals index large-9 medium-8 columns content">
    <h3><?= __('Animals') ?></h3>
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
            <?php foreach ($animals as $animal): ?>
            <tr>
                <td><?= $this->Number->format($animal->Id) ?></td>
                <td><?= h($animal->Name) ?></td>
                <td><?= h($animal->Created) ?></td>
                <td><?= h($animal->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animal->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animal->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animal->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->Id)]) ?>
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
