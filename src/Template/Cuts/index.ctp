<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('New Cut'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Cuts');?></a></h1>
    </header>
               
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('Animal_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Created') ?></th>
                <th><?= $this->Paginator->sort('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cuts as $cut): ?>
            <tr>
                <td><?= $this->Number->format($cut->id) ?></td>
                <td><?= $cut->has('animal') ? $this->Html->link($cut->animal->Name, ['controller' => 'Animals', 'action' => 'view', $cut->animal->Id]) : '' ?></td>
                <td><?= h($cut->Name) ?></td>
                <td><?= h($cut->Created) ?></td>
                <td><?= h($cut->Modified) ?></td>
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
