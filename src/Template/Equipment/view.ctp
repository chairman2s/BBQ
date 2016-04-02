<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipment'), ['action' => 'delete', $equipment->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id), 'class' => 'btn-danger']) ?> </li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equipment view col-lg-10 col-md-9 columns">
    <h2><?= h($equipment->Name) ?></h2>
    <div class="row">
        <div class="col-lg-5 columns strings">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Heat Source') ?></h6>
                    <p><?= $equipment->has('heat_source') ? $this->Html->link($equipment->heat_source->Name, ['controller' => 'HeatSources', 'action' => 'view', $equipment->heat_source->Id]) : '' ?></p>
                    <h6 class="subheader"><?= __('Name') ?></h6>
                    <p><?= h($equipment->Name) ?></p>
                    <h6 class="subheader"><?= __('User') ?></h6>
                    <p><?= $equipment->has('user') ? $this->Html->link($equipment->user->Username, ['controller' => 'Users', 'action' => 'view', $equipment->user->id]) : '' ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns numbers end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Id') ?></h6>
                    <p><?= $this->Number->format($equipment->Id) ?></p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 columns dates end">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h6 class="subheader"><?= __('Created') ?></h6>
                    <p><?= h($equipment->Created) ?></p>
                    <h6 class="subheader"><?= __('Modified') ?></h6>
                    <p><?= h($equipment->Modified) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
