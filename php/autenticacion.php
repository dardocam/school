<?php

if ( isset($_POST['email']) && isset($_POST['password']) ) {
  $email = trim($_POST['email']);
  $passw = trim($_POST['password']);
  autenticacion($email,$passw);
  header("Location: http://192.168.0.250/school/index.php");
}


function autenticacion( $email , $passw ){
  //buscar en el archivo 'usuarios.txt' si el usuario esta registrado
  $fp = fopen('../files/usuarioAdmin.txt','r');
  //$line = fgets($fp); //salta la linea de encabezado
  while(!feof($fp)) { //recorre el archivo secuencialmente linea por linea de principio a fin
    $line = trim(fgets($fp));//obtiene la linea completa
    if($line){
      $vector = explode(';', $line);//crea un vector con los datos individualizados utilizando el separador
      $registerEmail = $vector[0];
      $registerPassw = $vector[1];
      if ($email == $registerEmail && $passw == $registerPassw){
        session_name('school');
        session_set_cookie_params(0);
        session_cache_expire(0);
        session_start();
        $_SESSION["username"]= 'usuarioAdmin';
      }
    }
  }//end while
  fclose($fp); //libera el socket de comunicación con el archivo de texto
}

?>
