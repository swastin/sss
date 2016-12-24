<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Itemstock'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itemstock form large-9 medium-8 columns content">
    <?= $this->Form->create($itemstock) ?>
    <fieldset>
        <legend><?= __('Add Itemstock') ?></legend>
        <?php
            echo $this->Form->input('itemheadid');
            echo $this->Form->input('expendituredate');
            echo $this->Form->input('quantity');
            echo $this->Form->input('remark');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
