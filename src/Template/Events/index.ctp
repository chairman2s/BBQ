<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cuts'), ['controller' => 'Cuts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cut'), ['controller' => 'Cuts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>
                                                   
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Date') ?></th>
                <th><?= $this->Paginator->sort('Cut_id') ?></th>
                <th><?= $this->Paginator->sort('Equipment_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->Id) ?></td>
                <td><?= h($event->Name) ?></td>
                <td><?= h($event->Date) ?></td>
                <td><?= $event->has('cut') ? $this->Html->link($event->cut->Name, ['controller' => 'Cuts', 'action' => 'view', $event->cut->id]) : '' ?></td>
                <td><?= $event->has('equipment') ? $this->Html->link($event->equipment->Name, ['controller' => 'Equipment', 'action' => 'view', $event->equipment->Id]) : '' ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->Id]) ?>
                    <?= $this->Html->link(__('Chart'), ['controller' => 'ProbeLogs','action' => 'viewgooglegraph', $event->Id]) ?>
                    
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->Id)]) ?>
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
