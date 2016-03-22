<!-- File: src/Template/Articles/add.ctp -->

<h1>Edit Tipo Usuario</h1>
<?php
    echo $this->Form->create($tiposUsuario);
    echo $this->Form->input('nombretipo');
    echo $this->Form->button(__('Save Peticion'));   
    echo $this->Form->end();
