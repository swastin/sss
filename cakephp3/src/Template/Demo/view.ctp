<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demo'), ['action' => 'edit', $demo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demo'), ['action' => 'delete', $demo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demo view large-9 medium-8 columns content">
    <h3><?= h($demo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($demo->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emailid') ?></th>
            <td><?= h($demo->emailid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $this->Number->format($demo->created) ?></td>
        </tr>
    </table>
</div>
