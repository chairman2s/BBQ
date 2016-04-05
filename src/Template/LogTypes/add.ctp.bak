<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Log Types'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($logType) ?>
    <fieldset>
        <legend><?= __('Add Log Type') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('Created');
            echo $this->Form->input('Modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
