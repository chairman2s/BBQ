<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Probe'), ['action' => 'edit', $probe->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Probe'), ['action' => 'delete', $probe->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $probe->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Probes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Probe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="probes view large-9 medium-8 columns content">
    <h3><?= h($probe->Name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($probe->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($probe->Id) ?></td>
        </tr>
    </table>
</div>