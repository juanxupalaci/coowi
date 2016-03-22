<!-- File: src/Template/Identifican/edit.ctp -->
<h1>Edit Identifica</h1>
<?php
    echo $this->Form->create($identifican);
    echo $this->Form->input('iditem');
    echo $this->Form->input('idetiqueta');
    echo $this->Form->button(__('Edit Identifica'));
    echo $this->Form->end();
