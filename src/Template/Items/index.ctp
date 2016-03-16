<!-- File: src/Template/Items/index.ctp -->

<h1>Items</h1>
<table>
    <tr>
        <th>iditem</th>
        <th>idpeticion</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>fecha</th>
        <th>estado</th>
    </tr>

    <!-- Here is where we iterate through our $items query object, printing out item info -->

    <?php foreach ($items as $item): ?>
    <tr>
        <td><?= $item->iditem ?></td>
        <td><?= $item->idpeticion ?></td>
        <td><?= $item->nombre ?></td>
        <td><?= $item->descripcion ?></td>
        <td><?= $item->fecha ?></td>
        <td><?= $item->estado ?></td>
        <td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $item->iditem],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $item->iditem]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>