<!-- File: src/Template/Items/edit.ctp -->
<h1>Edit Item</h1>
<?php
    echo $this->Form->create($item);
    //echo $this->Form->input('idpeticion');
    echo $this->Form->input('nombre');
    echo $this->Form->input('descripcion', ['rows' => '3']);    
    echo $this->Form->input('fecha');
    echo $this->Form->input('estado');
    //echo $this->Form->input('fechacreacion', array('label' => 'Fecha Creacion', 'disabled'=>'disabled', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y')));
    //echo $this->Form->input('fechacaducidad', array('label' => 'Fecha Caducidad', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 5));
    //echo date("d-m-Y H:i:s");
    //echo $this->Form->input('localidad');
    echo $this->Form->button(__('Edit Item'));
    echo $this->Form->end();