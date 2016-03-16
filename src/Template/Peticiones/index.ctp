<!-- File: src/Template/Peticiones/index.ctp -->

<h1>Peticiones</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Titulo</th>
		<th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($peticiones as $peticion): ?>
    <tr>
        <td><?= $peticion->IDPETICION ?></td>
        <td>
            <?= $this->Html->link($peticion->TITULO, ['action' => 'view', $peticion->IDPETICION]) ?>
        </td>
		<td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $peticion->IDPETICION],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $peticion->IDPETICION]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>