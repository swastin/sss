<html>
<body>
<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Book'));
    echo $this->Form->end();
?>
</body>
</html>