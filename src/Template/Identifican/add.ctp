<!-- File: src/Template/Identifican/add.ctp -->

<!-- http://book.cakephp.org/3.0/en/views/helpers/form.html -->
<h1>Add Identifica</h1>
<?php
    echo $this->Form->create($identifica);
    //echo $this->Form->input('iditem');
    
    //echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Save Estudio'));
    echo $this->Form->end();
?>