<!-- File: src/Template/Peticion/view.ctp -->

<h1><?= h($peticione->idpeticion) ?></h1>
<p><?= h($peticione->titulo) ?></p>
<p><small>Created: <?= $peticione->fechacreacion->format(DATE_RFC850) ?></small></p>