<html>
<body>
<h1>Blog articles</h1>
<p><?= $this->Html->link("Add books", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Action1</th>
         <th>Action2</th>

    </tr>

<!-- Here's where we iterate through our $articles query object, printing out article info -->

<?php foreach ($books as $book): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td>
            <?= $this->Html->link($book->title, ['action' => 'view', $book->id]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Html->link('Edit', ['action' => 'edit', $book->id]) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $book->id],
                ['confirm' => 'Are you sure?'])
            ?>
            
        </td>
    </tr>
<?php endforeach; ?>

</table>
</body>
</html>