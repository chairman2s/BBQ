<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log Type'), ['action' => 'edit', $logType->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log Type'), ['action' => 'delete', $logType->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $logType->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Log Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logType view large-9 medium-8 columns content">
    <h3><?= h($logType->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($logType->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($logType->Id) ?></td>
        </tr>
    </table>
</div>
