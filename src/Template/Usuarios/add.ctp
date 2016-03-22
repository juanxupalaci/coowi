<!-- File: src/Template/Usuarios/add.ctp -->

<h1>Add Usuario</h1>
<?php
    echo $this->Form->create($usuario);    
    echo $this->Form->input('nif');    
    echo $this->Form->input('contrasena');
    echo $this->Form->input('idtipousuario');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellidos');
    echo $this->Form->input('email');
    echo $this->Form->input('telefono');
    echo $this->Form->input('localidad');
    echo $this->Form->input('cp');
    echo $this->Form->input('foto');   
    echo $this->Form->button(__('Save Trabajo'));
    echo $this->Form->end();
