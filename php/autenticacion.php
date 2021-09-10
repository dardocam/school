<?php
require_once 'configuracion.php';


if ( isset($_POST['email']) && isset($_POST['password']) ) {
  $email = trim($_POST['email']);
  $passw = trim($_POST['password']);
  if (autenticacion($email,$passw)) {
    header('Location: '.HOME_URL);
  }else{
    require_once '../views/errorAutenticacionView.php';
  }
}


function autenticacion( $email , $passw ){
  //buscar en el archivo 'usuarios.txt' si el usuario esta registrado
  $fp = fopen('../files/usuarioAdmin.txt','r');

  //$line = fgets($fp); //salta la linea de encabezado
  while(!feof($fp)) { //recorre el archivo secuencialmente linea por linea de principio a fin
    $line = trim(fgets($fp));//obtiene la linea completa
    if($line){
      $vector = explode(';', $line);//crea un vector con los datos individualizados utilizando el separador
      $registerEmail = (string)$vector[0];
      $registerPassw = (string)$vector[1];
      $admin         = (bool)$vector[2];

      if ($email == $registerEmail && $passw == $registerPassw && $admin == true){
        $_SESSION["username"]= 'usuarioAdmin';
        $_SESSION["admin"] = true;
        return true;
      }
      if ($email == $registerEmail && $passw == $registerPassw && $admin == false){
        $_SESSION["username"]= 'usuarioEncargado';
        $_SESSION["admin"] = false;
        return true;
      }
    }
  }//end while
  fclose($fp); //libera el socket de comunicación con el archivo de texto
  return false;
}

?>
