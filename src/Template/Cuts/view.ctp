<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cut'), ['action' => 'edit', $cut->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cut'), ['action' => 'delete', $cut->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cut->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cut'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['controller' => 'Animals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['controller' => 'Animals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuts view large-9 medium-8 columns content">
    <h3><?= h($cut->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Animal') ?></th>
            <td><?= $cut->has('animal') ? $this->Html->link($cut->animal->Name, ['controller' => 'Animals', 'action' => 'view', $cut->animal->Id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($cut->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cut->id) ?></td>
        </tr>
    </table>
</div>
