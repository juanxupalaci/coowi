<!-- File: src/Template/Articles/add.ctp -->

<h1>Edit Peticion</h1>
<?php
    echo $this->Form->create($peticione);
    echo $this->Form->input('titulo');
    echo $this->Form->input('idusuario');       
    echo $this->Form->input('descripcion', ['rows' => '3']);
    echo $this->Form->input('estado');
    //echo $this->Form->input('fechacreacion', array('label' => 'Fecha Creacion', 'disabled'=>'disabled', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y')));
    echo $this->Form->input('fechacaducidad', array('label' => 'Fecha Caducidad', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 5));
    //echo date("d-m-Y H:i:s");
    echo $this->Form->input('localidad');
    echo $this->Form->button(__('Save Peticion'));
    echo $this->Form->end();
