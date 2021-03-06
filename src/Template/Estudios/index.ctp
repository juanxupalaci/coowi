<!-- File: src/Template/Estudios/index.ctp -->

<h1>Estudios</h1>

<?= $this->Html->link('Add Estudio', ['action' => 'add']) ?>

<table>
    <tr>
        <th>idestudio</th>
        <th>nif(idusuario)</th>
        <th>centro</th>
        <th>titulacion</th>
        <th>fechainicio</th>
        <th>fechafin</th>
        <th>Acciones</th>
        
        <!-- <th>id</th>
        <th>Title</th>
        <th>Created</th>
	<th>Action</th> -->
    </tr>

    <!-- Here is where we iterate through our $estudios query object, printing out article info -->

    <?php foreach ($estudios as $estudio): ?>
    <tr>
        <td><?= $estudio->idestudio ?></td>
        <td>
            <?= $this->Html->link($estudio->idusuario, ['action' => 'view', $estudio->idestudio]) ?>
            <!-- <?= $estudio->idusuario ?> -->
        </td>
        <td><?= $estudio->centro ?></td>
        <td><?= $estudio->titulacion ?></td>
        <td>
            
            <?= $estudio->fechainicio ?>
        </td>
        <td><?= $estudio->fechafin ?></td>
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $estudio->idestudio],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $estudio->idestudio]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
