<!-- File: src/Template/Identifican/index.ctp -->

<h1>Identifican</h1>

<?= $this->Html->link('Add Identifica', ['action' => 'add']) ?>

<table>
    <tr>
        <th>iditem</th>
        <th>idetiqueta</th>
    </tr>

    <!-- Here is where we iterate through our $identifican query object, printing out identifica info -->

    <?php foreach ($identifican as $identifica): ?>
    <tr>
        <td><?= $identifica->iditem ?></td>
        <td><?= $identifica->idetiqueta ?></td>
        <td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $identifica->iditem],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $identifica->iditem]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>