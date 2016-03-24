<!-- File: src/Template/Valoraciones/index.ctp -->

<h1>Valoraciones</h1>

<?= $this->Html->link('Add Valoracion', ['action' => 'add']) ?>

<table>
    <tr>
        <th>Id Valoracion</th>
        <th>ID Usuario 1</th>
        <th>ID Usuario 2</th>
        <th>Comentario</th>
        <th>Putuacion</th>
        <th>Fecha</th>
        <th>Estado</th>        
        <th>Acciones</th>       
    </tr>

    <!-- Here is where we iterate through our $valoracions query object, printing out article info -->

    <?php foreach ($valoraciones as $valoracion): ?>
    <tr>
        <td><?= $valoracion->idvaloracion ?></td>
        <td><?= $valoracion->idusuario1 ?></td>
        <td><?= $valoracion->idusuario2 ?></td>
        <td>
            <?= $this->Html->link($valoracion->comentario, ['action' => 'view', $valoracion->idvaloracion]) ?>            
        </td>
        <td><?= $valoracion->puntuacion ?></td>
        <td><?= $valoracion->fecha ?></td>
        <td><?= $valoracion->estado ?></td>        
	<td>
		<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $valoracion->idvaloracion],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $valoracion->idvaloracion]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
