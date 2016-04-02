<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li class="active disabled"><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equipment index col-lg-10 col-md-9 columns">
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('HeatSource_id') ?></th>
                <th><?= $this->Paginator->sort('Name') ?></th>
                <th><?= $this->Paginator->sort('Created') ?></th>
                <th><?= $this->Paginator->sort('Modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($equipment as $equipment): ?>
            <tr>
                <td><?= $this->Number->format($equipment->Id) ?></td>
                <td>
                    <?= $equipment->has('heat_source') ? $this->Html->link($equipment->heat_source->Name, ['controller' => 'HeatSources', 'action' => 'view', $equipment->heat_source->Id]) : '' ?>
                </td>
            <td><?= h($equipment->Name) ?></td>
                <td><?= h($equipment->Created) ?></td>
                <td><?= h($equipment->Modified) ?></td>
                <td>
                    <?= $equipment->has('user') ? $this->Html->link($equipment->user->Username, ['controller' => 'Users', 'action' => 'view', $equipment->user->id]) : '' ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-zoom-in"></span><span class="sr-only">' . __('View') . '</span>', ['action' => 'view', $equipment->Id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('View')]) ?>
                    <?= $this->Html->link('<span class="glyphicon glyphicon-pencil"></span><span class="sr-only">' . __('Edit') . '</span>', ['action' => 'edit', $equipment->Id], ['escape' => false, 'class' => 'btn btn-xs btn-default', 'title' => __('Edit')]) ?>
                    <?= $this->Form->postLink('<span class="glyphicon glyphicon-trash"></span><span class="sr-only">' . __('Delete') . '</span>', ['action' => 'delete', $equipment->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id), 'escape' => false, 'class' => 'btn btn-xs btn-danger', 'title' => __('Delete')]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
