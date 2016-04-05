<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $heatSource->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $heatSource->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Heat Sources'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Heat soruce'); ?></a></h1>
    </header>
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
