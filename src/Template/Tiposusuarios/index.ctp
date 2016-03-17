<!-- File: src/Template/Peticiones/index.ctp -->

<h1>Tipos Usuarios</h1>
<?= $this->Html->link('Add Tipo Usuario', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre Tipo</th>
		<th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($tiposUsuarios as $tiposusuario): ?>
    <tr>
        <td><?= $tiposusuario->idtipousuario ?></td>
        <td>
            <?= $this->Html->link($tiposusuario->nombretipo, ['action' => 'view', $tiposusuario->idtipousuario]) ?>
        </td>
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $tiposusuario->idtipousuario],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $tiposusuario->idtipousuario]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>