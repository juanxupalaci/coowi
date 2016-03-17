<!-- File: src/Template/Etiquetas/index.ctp -->

<h1>Etiquetas</h1>

<?= $this->Html->link('Add Etiqueta', ['action' => 'add']) ?>

<table>
    <tr>
        <th>idetiqueta</th>
        <th>nombre</th>
        <th>fecha</th>
        <th>estado</th>
    </tr>

    <!-- Here is where we iterate through our $etiquetas query object, printing out etiqueta info -->

    <?php foreach ($etiquetas as $etiqueta): ?>
    <tr>
        <td><?= $etiqueta->idetiqueta ?></td>
        <td><?= $etiqueta->nombre ?></td>
        <td><?= $etiqueta->fecha ?></td>
        <td><?= $etiqueta->estado ?></td>
        <td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $etiqueta->idetiqueta],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $etiqueta->idetiqueta]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>