
<div class="grid-container">

  <div class="barraSuperior">
    <h1>HOME PAGE</h1>
    <p><?= $_SESSION['username'] ?><a href="php/logout.php">Salir</a></p>
  </div>

  <div class="leftMenu">
    <div>
      <p>Datos tabla comments</p>
      <form action="php/Conexion.php" method="get">
        <input type="hidden" name="id" value="1">
        <button type="submit">LISTAR TODO</button>
      </form>
    </div>
  </div>

  <div id="content" class="content">
    <?php
      if (isset($_GET['id'])) {
        require 'php/Conexion.php';
        $resultado = DbConnect();
        echo "<pre>";
        var_dump($resultado);
      }
    ?>
  </div>
  
</div>
