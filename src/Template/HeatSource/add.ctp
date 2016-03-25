<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Heat Source'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="heatSource form large-9 medium-8 columns content">
    <?= $this->Form->create($heatSource) ?>
    <fieldset>
        <legend><?= __('Add Heat Source') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
