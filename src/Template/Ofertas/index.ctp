<!-- File: src/Template/Ofertas/index.ctp -->

<h1>Ofertas</h1>
<table>
    <tr>
        <th>idoferta</th>
        <th>iditem</th>
        <th>precio</th>
        <th>comentario</th>
        <th>fecha</th>
        <th>estado</th>
    </tr>

    <!-- Here is where we iterate through our $ofertas query object, printing out oferta info -->

    <?php foreach ($ofertas as $oferta): ?>
    <tr>
        <td><?= $oferta->idoferta ?></td>
        <td><?= $oferta->iditem ?></td>
        <td><?= $oferta->precio ?></td>
        <td><?= $oferta->comentario ?></td>
        <td><?= $oferta->fecha ?></td>
        <td><?= $oferta->estado ?></td>
        <td>
			<?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $oferta->idoferta],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $oferta->idoferta]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>