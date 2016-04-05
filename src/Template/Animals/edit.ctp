<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $animal->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $animal->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
    <header>
        <h1><a href=""><?= __('Animals'); ?></a></h1>
    </header>
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
