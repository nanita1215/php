<!-- Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan seleccionar si la persona: 1-no tiene estudios, 2-estudios primarios y 3-estudios secundarios.
En la página que procesa el formulario mostrar el nombre de la persona y un mensaje indicando el tipo de estudios que posee. -->

<html>

<head>
  <title>Problema</title>
</head>

<body>

  <form action="pagina2.php" method="post">
    Ingrese Nombre:
    <input type="text" name="nombre">
    <br>
    Estudios:
    <br>
    <input type="radio" name="radio1" value="sin">Sin estudios
    <br>
    <input type="radio" name="radio1" value="primario">Estudios primarios
    <br>
    <input type="radio" name="radio1" value="secundario">Estudios secundarios
    <br>
    <input type="submit" value="Confirmar">
  </form>

</body>

</html>