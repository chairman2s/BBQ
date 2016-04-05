<!-- Menu -->
<nav id="menu">
    <h2><?= __('Menu') ?></h2>
    <ul>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div id="main">
    <div class="inner">
        <?php if ($this->fetch('title') != ''){?>
     <header>
        <h1><a href=""><?= $this->fetch('title') ?></a></h1>
    </header>   
        <?php } ?>
    <?= $this->Form->create($animal) ?>
    <fieldset>
        <legend><?= __('Add Animal') ?></legend>
        <?php
            echo $this->Form->input('Name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
