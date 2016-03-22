<!-- File: src/Template/Trabajos/add.ctp -->

<h1>Add Trabajo</h1>
<?php
    echo $this->Form->create($trabajo);    
    echo $this->Form->input('idusuario');    
    echo $this->Form->input('empresa');
    echo $this->Form->input('puesto');
    echo $this->Form->input('fechainicio', array('label' => 'Fecha Inicio', 'dateFormat' => 'DMY', 'maxYear' => date('Y') + 5));
    echo $this->Form->input('fechafin', array('label' => 'Fecha Fin', 'dateFormat' => 'DMY', 'maxYear' => date('Y') + 5));    
    echo $this->Form->button(__('Save Trabajo'));
    echo $this->Form->end();
