<div class="actions columns col-lg-2 col-md-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="nav nav-stacked nav-pills">
        <li class="active disabled"><?= $this->Html->link(__('Edit Equipment'), ['action' => 'edit', $equipment->Id]) ?> </li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipment->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipment->Id), 'class' => 'btn-danger']
            )
        ?></li>
        <li><?= $this->Html->link(__('New Equipment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['controller' => 'HeatSources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Heat Source'), ['controller' => 'HeatSources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equipment form col-lg-10 col-md-9 columns">
    <?= $this->Form->create($equipment); ?>
    <fieldset>
        <legend><?= __('Edit Equipment') ?></legend>
        <?php
            echo $this->Form->input('HeatSource_id', ['options' => $heatSources]);
            echo $this->Form->input('Name');
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
