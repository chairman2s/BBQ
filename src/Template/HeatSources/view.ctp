<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Heat Source'), ['action' => 'edit', $heatSource->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Heat Source'), ['action' => 'delete', $heatSource->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $heatSource->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="heatSources view large-9 medium-8 columns content">
    <h3><?= h($heatSource->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($heatSource->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($heatSource->Id) ?></td>
        </tr>
    </table>
</div>
