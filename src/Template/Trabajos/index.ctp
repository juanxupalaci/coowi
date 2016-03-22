<!-- File: src/Template/Trabajos/index.ctp -->

<h1>Trabajos</h1>
<?= $this->Html->link('Add Trabajo', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Usuario</th>
	<th>Empresa</th>
        <th>Puesto</th>
        <th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($trabajos as $trabajo): ?>
    <tr>
        <td><?= $trabajo->idtrabajo ?></td>
        <td><?= $trabajo->idusuario ?></td>
        <td>
            <?= $this->Html->link($trabajo->empresa, ['action' => 'view', $trabajo->idtrabajo]) ?>
        </td>
        <td><?= $trabajo->puesto ?></td>
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $trabajo->idtrabajo],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $trabajo->idtrabajo]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>