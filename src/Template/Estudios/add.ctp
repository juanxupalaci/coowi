<!-- File: src/Template/Estudios/add.ctp -->

<!-- http://book.cakephp.org/3.0/en/views/helpers/form.html -->
<h1>Add Estudio</h1>
<?php
    echo $this->Form->create($estudio);
    echo $this->Form->input('nif');
    echo $this->Form->input('centro');
    echo $this->Form->input('titulacion');
    echo $this->Form->input('fechainicio');
    echo $this->Form->input('fechafin');
    //echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Estudio'));
    echo $this->Form->end();
?>
