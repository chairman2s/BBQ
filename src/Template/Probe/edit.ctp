<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $probe->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $probe->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Probe'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="probe form large-9 medium-8 columns content">
    <?= $this->Form->create($probe) ?>
    <fieldset>
        <legend><?= __('Edit Probe') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>