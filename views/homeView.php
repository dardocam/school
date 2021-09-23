
<div class="grid-container">
  <div class="barraSuperior">
    <h1>HOME PAGE</h1>
    <p><?= $_SESSION['username'] ?><a href="php/logout.php">Salir</a></p>

  </div>
  <div class="leftMenu">

    <div>
      <p>Sucursal - 1</p>
      <button type="button" onclick="loadDataLocal(1)">Local N1 - ajax</button>

      <form action="php/Conexion.php" method="post">
        <input type="hidden" name="id" value="1">
        <button type="submit">BASE</button>
      </form>

      <button type="button" onclick="cargarDatos()">Local N3</button>
    </div>


    <div>
      <p>Sucursal - 2</p>
      <button type="button" onclick="cargarDatos()">Local N1</button>
      <button type="button" onclick="cargarDatos()">Local N2</button>
      <button type="button" onclick="cargarDatos()">Local N3</button>
    </div>
  </div>
  <div id="content" class="content">
    <?php if (isset($_SESSION['data'])) {
        var_dump($_SESSION['data']);
    }
    ?>
  </div>
</div>
