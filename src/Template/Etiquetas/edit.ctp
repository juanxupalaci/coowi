<!-- File: src/Template/Etiquetas/edit.ctp -->
<h1>Edit Etiqueta</h1>
<?php
    echo $this->Form->create($etiqueta);
    //echo $this->Form->input('idetiqueta');
    echo $this->Form->input('nombre');
    echo $this->Form->input('fecha');
    echo $this->Form->input('estado');
    //echo $this->Form->input('fechacreacion', array('label' => 'Fecha Creacion', 'disabled'=>'disabled', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y')));
    //echo $this->Form->input('fechacaducidad', array('label' => 'Fecha Caducidad', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 5));
    //echo date("d-m-Y H:i:s");
    //echo $this->Form->input('localidad');
    echo $this->Form->button(__('Edit Etiqueta'));
    echo $this->Form->end();
