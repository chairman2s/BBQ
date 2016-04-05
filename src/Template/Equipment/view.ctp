<!-- view.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Actions') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <h3><?= h($equipment->Name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Heat Source') ?></th>
            <td><?= $equipment->has('heat_source') ? $this->Html->link($equipment->heat_source->Name, ['controller' => 'HeatSources', 'action' => 'view', $equipment->heat_source->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($equipment->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $equipment->has('user') ? $this->Html->link($equipment->user->Username, ['controller' => 'Users', 'action' => 'view', $equipment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipment->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($equipment->Created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($equipment->Modified) ?></td>
        </tr>
    </table>
</div>
