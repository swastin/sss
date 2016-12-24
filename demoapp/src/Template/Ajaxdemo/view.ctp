<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ajaxdemo'), ['action' => 'edit', $ajaxdemo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ajaxdemo'), ['action' => 'delete', $ajaxdemo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ajaxdemo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ajaxdemo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ajaxdemo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ajaxdemo view large-9 medium-8 columns content">
    <h3><?= h($ajaxdemo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email Id') ?></th>
            <td><?= h($ajaxdemo->email id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($ajaxdemo->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ajaxdemo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ajaxdemo->created) ?></td>
        </tr>
    </table>
</div>
