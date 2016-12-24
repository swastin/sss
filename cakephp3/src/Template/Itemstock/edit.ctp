<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemstock->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemstock->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itemstock'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="itemstock form large-9 medium-8 columns content">
    <?= $this->Form->create($itemstock) ?>
    <fieldset>
        <legend><?= __('Edit Itemstock') ?></legend>
        <?php
            echo $this->Form->input('totalamount');
            echo $this->Form->input('stockdate');
            echo $this->Form->input('quantity');
            echo $this->Form->input('remark');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?> 
    <?= $this->Form->end() ?>
</div>
