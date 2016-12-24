<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Demo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="demo form large-9 medium-8 columns content">
    <?= $this->Form->create($demo) ?>
    <fieldset>
        <legend><?= __('Add Demo') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('emailid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
