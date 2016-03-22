<!-- File: src/Template/Ofertas/edit.ctp -->
<h1>Edit Oferta</h1>
<?php
    echo $this->Form->create($oferta);
    //echo $this->Form->input('iditem');
    echo $this->Form->input('precio');
    echo $this->Form->input('comentario', ['rows' => '3']);    
    echo $this->Form->input('fecha');
    echo $this->Form->input('estado');
    //echo $this->Form->input('fechacreacion', array('label' => 'Fecha Creacion', 'disabled'=>'disabled', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y')));
    //echo $this->Form->input('fechacaducidad', array('label' => 'Fecha Caducidad', 'dateFormat' => 'DMY', 'minYear' => date('Y'), 'maxYear' => date('Y') + 5));
    //echo date("d-m-Y H:i:s");
    //echo $this->Form->input('localidad');
    echo $this->Form->button(__('Edit Oferta'));
    echo $this->Form->end();
