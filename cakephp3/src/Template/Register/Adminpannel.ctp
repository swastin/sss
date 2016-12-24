
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>FirstnName</th>
        <th>LastName</th>
        <th>Emailid</th>
         <th>Password</th>
         <th>created</th>
         <th>Action1</th>
         <th>Action2</th>
    </tr>
<?php foreach ($register as $reg): ?>
    <tr>
        <td><?= $reg->id ?></td>
         <td><?= $reg->firstname?></td>
        <td><?= $reg->lastname ?></td>
        <td><?= $reg->emailid ?></td>
           <td><?= $reg->password ?></td>
            <td>
            <?= $reg->created ?>
        </td>
      
        <td>


       
            <?= $this->Html->link('Edit', ['action' => 'edit', $reg->id]) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $reg->id],
                ['confirm' => 'Are you sure?'])
            ?>
            
        </td>
    </tr>
<?php endforeach; ?>

</table>