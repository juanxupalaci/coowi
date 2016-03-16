<!-- File: src/Template/Peticion/view.ctp -->

<h1><?= h($peticione->IDPETICION) ?></h1>
<p><?= h($peticione->TITULO) ?></p>
<p><small>Created: <?= $peticione->FECHACREACION->format(DATE_RFC850) ?></small></p>