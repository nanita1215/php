<!-- Confeccionar un formulario que solicite la carga de un nombre de persona y su edad, luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18) -->


<html>

<head>
  <title>Problema</title>
</head>

<body>

  <form method="post" action="pagina2.php">
    Ingrese el nombre:
    <input type="text" name="nombre">
    <br>
    Ingrese la edad:
    <input type="text" name="edad">
    <br>
    <input type="submit" value="confirmar">
  </form>

</body>

</html>