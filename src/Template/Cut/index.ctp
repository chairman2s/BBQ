<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cut'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cut index large-9 medium-8 columns content">
    <h3><?= __('Cut') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Animal_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cut as $cut): ?>
            <tr>
                <td><?= $this->Number->format($cut->id) ?></td>
                <td><?= $cut->has('animal') ? $this->Html->link($cut->animal->Name, ['controller' => 'Animals', 'action' => 'view', $cut->animal->Id]) : '' ?></td>
                <td><?= h($cut->Name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cut->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cut->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cut->id)]) ?>
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
