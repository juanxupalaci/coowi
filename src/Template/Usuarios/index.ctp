<!-- File: src/Template/Usuarios/index.ctp -->

<h1>Trabajos</h1>
<?= $this->Html->link('Add Usuario', ['action' => 'add']) ?>
<table>
    <tr>
        <th>ID</th>
        <th>NIF</th>
	<th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?= $usuario->idusuario ?></td>
        <td><?= $usuario->nif ?></td>
        <td>
            <?= $this->Html->link($usuario->nombre, ['action' => 'view', $usuario->idusuario]) ?>
        </td>        
        <td><?= $usuario->email ?></td>
        
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $usuario->idusuario],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $usuario->idusuario]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>