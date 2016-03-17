<!-- File: src/Template/Etiquetas/add.ctp -->

<!-- http://book.cakephp.org/3.0/en/views/helpers/form.html -->
<h1>Add Etiqueta</h1>
<?php
    echo $this->Form->create($etiqueta);
    echo $this->Form->input('nombre');
    echo $this->Form->input('fecha');
    echo $this->Form->input('estado');
    echo $this->Form->button(__('Save Estudio'));
    echo $this->Form->end();
?>
