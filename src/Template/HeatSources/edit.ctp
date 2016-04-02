<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $heatSource->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $heatSource->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="heatSources form large-9 medium-8 columns content">
    <?= $this->Form->create($heatSource) ?>
    <fieldset>
        <legend><?= __('Edit Heat Source') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
