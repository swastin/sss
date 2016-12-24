<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demo index large-9 medium-8 columns content">
    <h3><?= __('Demo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emailid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demo as $demo): ?>
            <tr>
                <td><?= $this->Number->format($demo->id) ?></td>
                <td><?= h($demo->firstname) ?></td>
                <td><?= h($demo->emailid) ?></td>
                <td><?= $this->Number->format($demo->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demo->id)]) ?>
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
