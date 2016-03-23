<!-- File: src/Template/Identifican/edit.ctp -->
<h1>Edit Identifica</h1>
<?php
    echo $this->Form->create($identifican);    
    echo $this->Form->input('idetiqueta', array('type' => 'text', 'label' => 'ID Etiqueta'));
    echo $this->Form->input('iditem', array('type' => 'text', 'label' => 'ID Item'));
    echo $this->Form->button(__('Save Identifica'));
    echo $this->Form->end();
