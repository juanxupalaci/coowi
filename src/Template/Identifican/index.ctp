<!-- File: src/Template/Identifican/index.ctp -->

<h1>Identifican</h1>

<?= $this->Html->link('Add Identifica', ['action' => 'add']) ?>

<table>
    <tr>
        <th>ID Identifican</th>
        <th>ID Etiqueta</th>
        <th>ID Item</th>
        <th>Acciones</th>
    </tr>

    <!-- Here is where we iterate through our $identifican query object, printing out identifica info -->

    <?php foreach ($identifican as $identifica): ?>
    <tr>
        <td><?= $identifica->idetiquetaitem ?></td>        
        <td><?= $identifica->idetiqueta ?></td>
        <td><?= $identifica->iditem ?></td>
        <td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $identifica->idetiquetaitem],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $identifica->idetiquetaitem]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>