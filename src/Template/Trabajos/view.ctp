<!-- File: src/Template/Trabajos/view.ctp -->

<h1>ID: <?= h($trabajo->idtrabajo) ?></h1>
<p>Usuario: <?= h($trabajo->idusuario) ?></p>
<p>Empresa: <?= h($trabajo->empresa) ?></p>
<p>Empresa: <?= h($trabajo->puesto) ?></p>
<p>Inicio: <?= $trabajo->fechainicio->format(DATE_RFC850) ?></p>
<p>Fin: <?= $trabajo->fechafin->format(DATE_RFC850) ?></p>
