

<html>
<body>
<h1>Add Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '5']);
    echo $this->Form->button(__('Save book'));
    echo $this->Form->end();
?>
</body>
</html>