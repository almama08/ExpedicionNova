<!DOCTYPE html>
<html>
<head>
    <title>Nebula - Registro de Hallazgos</title>
</head>
<body>

<h1>Panel de Registro Estelar</h1>
<hr>
<p>
    <a href="index.php?action=listar">Volver al Censo</a>
</p>

<h3>Registrar Nueva Forma de Vida</h3>
<form method="POST" action="index.php?action=guardarVida">
    <table border="0" cellpadding="5">
        <tr>
            <td>ID:</td>
            <td><input type="number" name="id" required></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>Planeta de Origen:</td>
            <td><input type="text" name="planeta" required></td>
        </tr>
        <tr>
            <td>Nivel de Estabilidad (0-100):</td>
            <td><input type="number" name="estabilidad" min="0" max="100" required></td>
        </tr>
        <tr>
            <td>Dieta:</td>
            <td><input type="text" name="dieta" placeholder="Ej: Fotosíntesis, Carbono..." required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Guardar Forma de Vida</button>
            </td>
        </tr>
    </table>
</form>

<hr>

<h3>Registrar Mineral Raro</h3>
<form method="POST" action="index.php?action=guardarMineral">
    <table border="0" cellpadding="5">
        <tr>
            <td>ID:</td>
            <td><input type="number" name="id" required></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>Planeta de Origen:</td>
            <td><input type="text" name="planeta" required></td>
        </tr>
        <tr>
            <td>Nivel de Estabilidad (0-100):</td>
            <td><input type="number" name="estabilidad" min="0" max="100" required></td>
        </tr>
        <tr>
            <td>Dureza (Escala Mohs):</td>
            <td><input type="text" name="dureza" placeholder="Ej: 7.5, Muy alta..." required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Guardar Mineral</button>
            </td>
        </tr>
    </table>
</form>

<hr>

<h3>Registrar Artefacto Antiguo</h3>
<form method="POST" action="index.php?action=guardarArtefacto">
    <table border="0" cellpadding="5">
        <tr>
            <td>ID:</td>
            <td><input type="number" name="id" required></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" required></td>
        </tr>
        <tr>
            <td>Planeta de Origen:</td>
            <td><input type="text" name="planeta" required></td>
        </tr>
        <tr>
            <td>Nivel de Estabilidad (0-100):</td>
            <td><input type="number" name="estabilidad" min="0" max="100" required></td>
        </tr>
        <tr>
            <td>Antigüedad (Años):</td>
            <td><input type="number" name="antiguedad" required></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Guardar Artefacto</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>