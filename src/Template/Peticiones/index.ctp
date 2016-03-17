<!-- File: src/Template/Peticiones/index.ctp -->

<h1>Peticiones</h1>
<?= $this->Html->link('Add Peticion', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
		<th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($peticiones as $peticion): ?>
    <tr>
        <td><?= $peticion->idpeticion ?></td>
        <td>
            <?= $this->Html->link($peticion->titulo, ['action' => 'view', $peticion->idpeticion]) ?>
        </td>
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $peticion->idpeticion],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $peticion->idpeticion]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>