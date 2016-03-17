<!-- File: src/Template/Items/add.ctp -->

<!-- http://book.cakephp.org/3.0/en/views/helpers/form.html -->
<h1>Add Item</h1>
<?php
    echo $this->Form->create($item);
    echo $this->Form->input('nombre');
    echo $this->Form->input('descripcion');
    echo $this->Form->input('fecha');
    echo $this->Form->input('estado');
    //echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Estudio'));
    echo $this->Form->end();
?>
