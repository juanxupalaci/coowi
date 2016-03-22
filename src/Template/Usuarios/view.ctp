<!-- File: src/Template/Usuarios/view.ctp -->

<h1>ID: <?= h($usuario->idusuario) ?></h1>
<p>NIF: <?= h($usuario->nif) ?></p>
<p>Tipo Usuario: <?= h($usuario->idtipousuario) ?></p>
<p>Nombre: <?= h($usuario->nombre) ?></p>
<p>Apellidos: <?= h($usuario->apellidos) ?></p>
<p>Email: <?= h($usuario->email) ?></p>
<p>Telefono: <?= h($usuario->telefono) ?></p>
<p>Localidad: <?= h($usuario->localidad) ?></p>
<p>CP: <?= h($usuario->cp) ?></p>
<p>Foto: <?= h($usuario->foto) ?></p>
<p>Contraseña: <?= h($usuario->contrasena) ?></p>
<p>Fecha Creacion: <?= $usuario->fecha->format(DATE_RFC850) ?></p>
<p>Estado: <?= h($usuario->estado) ?></p>
