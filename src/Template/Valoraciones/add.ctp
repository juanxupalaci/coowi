<!-- File: src/Template/Valoracion/add.ctp -->

<!-- http://book.cakephp.org/3.0/en/views/helpers/form.html -->
<h1>Add Estudio</h1>
<?php
    echo $this->Form->create($valoracione);
    echo $this->Form->input('idusuario1', array('label' => 'ID Usuario 1'));
    echo $this->Form->input('idusuario2', array('label' => 'ID Usuario 2'));
    echo $this->Form->input('comentario', array('label' => 'Comentario', 'rows' => '3'));
    echo $this->Form->input('puntuacion', array('label' => 'Puntuacion'));    
    echo $this->Form->button(__('Save Valoracion'));
    echo $this->Form->end();
