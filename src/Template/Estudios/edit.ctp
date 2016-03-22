<!-- File: src/Template/Estudios/edit.ctp -->
<h1>Edit Estudio</h1>
<?php
    echo $this->Form->create($estudio);
    //echo $this->Form->input('idestudio');
    echo $this->Form->input('idusuario');
    echo $this->Form->input('centro');
    echo $this->Form->input('titulacion');
    //echo $this->Form->input('descripcion', ['rows' => '3']);    
    echo $this->Form->input('fechainicio');
    echo $this->Form->input('fechafin');
    //echo $this->Form->input('fechacreacion', array('label' => 'Fecha Creacion', 'disabled'=>'disabled', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y')));
    //echo $this->Form->input('fechacaducidad', array('label' => 'Fecha Caducidad', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 5));
    //echo date("d-m-Y H:i:s");
    //echo $this->Form->input('localidad');
    echo $this->Form->button(__('Edit Estudio'));
    echo $this->Form->end();