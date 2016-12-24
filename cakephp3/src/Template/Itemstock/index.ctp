<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Itemstock'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemstock index large-9 medium-8 columns content">
    <h3><?= __('Itemstock') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemheadid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expendituredate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemstock as $itemstock): ?>
            <tr>
                <td><?= $this->Number->format($itemstock->id) ?></td>
                <td><?= h($itemstock->itemheadid) ?></td>
                <td><?= h($itemstock->expendituredate) ?></td>
                <td><?= $this->Number->format($itemstock->quantity) ?></td>
                <td><?= h($itemstock->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemstock->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemstock->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemstock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemstock->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
