<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Itemstock'), ['action' => 'edit', $itemstock->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itemstock'), ['action' => 'delete', $itemstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemstock->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itemstock'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemstock'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemstock view large-9 medium-8 columns content">
    <h3><?= h($itemstock->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Itemheadid') ?></th>
            <td><?= h($itemstock->itemheadid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemstock->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($itemstock->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expendituredate') ?></th>
            <td><?= h($itemstock->expendituredate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($itemstock->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Remark') ?></h4>
        <?= $this->Text->autoParagraph(h($itemstock->remark)); ?>
    </div>
</div>
