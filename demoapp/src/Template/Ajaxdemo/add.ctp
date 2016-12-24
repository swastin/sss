<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ajaxdemo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ajaxdemo form large-9 medium-8 columns content">
    <?= $this->Form->create($ajaxdemo) ?>
    <fieldset>
        <legend><?= __('Add Ajaxdemo') ?></legend>
        <?php
            echo $this->Form->input('email id');
            echo $this->Form->input('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
