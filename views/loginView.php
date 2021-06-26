
<div class="central">
  <form action="php/autenticacion.php" method="POST">
    <div class="fila">
      <div class="col-25">
        <label for="iemail">Email:</label>
      </div>
      <div class="col-75">
        <input type="email" id="iemail" name="email" required autofocus>
      </div>
    </div>
    <div class="fila">
      <div class="col-25">
        <label for="ipassword">Password:</label>
      </div>
      <div class="col-75">
        <input type="password" id="ipassword" name="password" required>
      </div>
    </div>
    <div class="fila">
      <input class="submit" type="submit" value="Enviar">
    </div>
  </form>
</div>
