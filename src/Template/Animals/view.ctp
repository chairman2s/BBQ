<!-- view.ctp start -->

<!-- Menu -->
<nav id="menu">
    <h2><?= __('Actions') ?></h2>
    <ul>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animal'), ['action' => 'edit', $animal->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animal'), ['action' => 'delete', $animal->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $animal->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <h3><?= h($animal->Name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($animal->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($animal->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($animal->Created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($animal->Modified) ?></td>
        </tr>
    </table>
</div>
