<!DOCTYPE html>
<html>
<head>
    <title>Nebula - Gestión de Hallazgos Estelares</title>
</head>
<body>

<h1>Censo de Hallazgos Estelares</h1>
<hr>

<a href="index.php?action=mostrarFormulario">Añadir Nuevo Hallazgo</a>

<h3>Formas de Vida</h3>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Origen</th>
        <th>Estabilidad</th>
        <th>Dieta</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($hallazgosPaginados as $h): ?>
        <?php if(get_class($h) == "FormaDeVida"): ?>
        <tr>
            <td><?php echo $h->getId(); ?></td>
            <td><?php echo $h->getNombre(); ?></td>
            <td><?php echo $h->getPlanetaOrigen(); ?></td>
            <td><?php echo $h->getNivelEstabilidad(); ?>%</td>
            <td><?php echo $h->getDieta(); ?></td>
            <td>
                <a href="index.php?action=eliminar&id=<?php echo $h->getId() ?>">Eliminar</a>
                <br><small><em>Reacción: <?php echo $h->reaccionar(); ?></em></small>
            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

<h3>Minerales Raros</h3>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Origen</th>
        <th>Estabilidad</th>
        <th>Dureza</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($hallazgosPaginados as $h): ?>
        <?php if(get_class($h) == "MineralRaro"): ?>
        <tr>
            <td><?php echo $h->getId(); ?></td>
            <td><?php echo $h->getNombre(); ?></td>
            <td><?php echo $h->getPlanetaOrigen(); ?></td>
            <td><?php echo $h->getNivelEstabilidad(); ?>%</td>
            <td><?php echo $h->getDureza(); ?></td>
            <td>
                <a href="index.php?action=eliminar&id=<?php echo $h->getId() ?>">Eliminar</a>
                <br><small><em>Reacción: <?php echo $h->reaccionar(); ?></em></small>
            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

<h3>Artefactos Antiguos</h3>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Origen</th>
        <th>Estabilidad</th>
        <th>Antigüedad</th>
        <th>Acciones</th>
    </tr>

    <?php foreach ($hallazgosPaginados as $h): ?>
        <?php if(get_class($h) == "ArtefactoAntiguo"): ?>
        <tr>
            <td><?php echo $h->getId(); ?></td>
            <td><?php echo $h->getNombre(); ?></td>
            <td><?php echo $h->getPlanetaOrigen(); ?></td>
            <td><?php echo $h->getNivelEstabilidad(); ?>%</td>
            <td><?php echo $h->getAntiguedad(); ?> años</td>
            <td>
                <a href="index.php?action=eliminar&id=<?php echo $h->getId() ?>">Eliminar</a>
                <br><small><em>Reacción: <?php echo $h->reaccionar(); ?></em></small>
            </td>
        </tr>
        <?php endif; ?>
    <?php endforeach; ?>
</table>

<hr>
<div>
    <strong>Páginas: </strong>
    <?php for($i=1; $i<=$totalPaginas; $i++): ?>
        <a href="index.php?action=listar&p=<?=$i?>">
            <?php echo ($paginaActual == $i) ? "[ $i ]" : $i; ?>
        </a>
    <?php endfor; ?>
</div>

</body>
</html>