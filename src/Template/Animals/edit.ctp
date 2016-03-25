<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $animal->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $animal->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="animals form large-9 medium-8 columns content">
    <?= $this->Form->create($animal) ?>
    <fieldset>
        <legend><?= __('Edit Animal') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
