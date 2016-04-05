<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('Edit Heat Source'), ['action' => 'edit', $heatSource->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Heat Source'), ['action' => 'delete', $heatSource->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $heatSource->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __($heatSource->Name); ?></a></h1>
    </header>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($heatSource->Name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($heatSource->Id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($heatSource->Created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($heatSource->Modified) ?></td>
        </tr>
    </table>
</div>
