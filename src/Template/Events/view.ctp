<!-- view.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Actions') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cuts'), ['controller' => 'Cuts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cut'), ['controller' => 'Cuts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['controller' => 'Equipment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['controller' => 'Equipment', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <h3><?= h($event->Name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($event->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Cut') ?></th>
            <td><?= $event->has('cut') ? $this->Html->link($event->cut->Name, ['controller' => 'Cuts', 'action' => 'view', $event->cut->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Equipment') ?></th>
            <td><?= $event->has('equipment') ? $this->Html->link($event->equipment->Name, ['controller' => 'Equipment', 'action' => 'view', $event->equipment->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($event->Date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
</div>
