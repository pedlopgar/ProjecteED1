<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Selección de departamento</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <h1>Selecciona un departamento</h1>
    <form action="InfoDepartamento.php" method="post">
        <input list="departamentos" name="departamento">
        <datalist id="departamentos">
            <option value="Informática">
            <option value="Lengua">
            <option value="Matemáticas">
            <option value="Inglés">
        </datalist><br>
        <input type="submit" name="Buscar">
    </form>

    </input>
</body>

</html>