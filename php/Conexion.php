<?php

/*
Host ec2-52-7-159-155.compute-1.amazonaws.com
Database d45iq9tlomq3kv
User vbplczzecsknma
Port 5432
Password a66f85ec92308f14d29b01ea8dc9198907de08134cd5c8d3db2b2753f22896ff

URI postgres://vbplczzecsknma:a66f85ec92308f14d29b01ea8dc9198907de08134cd5c8d3db2b2753f22896ff@ec2-52-7-159-155.compute-1.amazonaws.com:5432/d45iq9tlomq3kv
Para crear la tabla tuvimos que instalar el cliente de postgres y la cli de heroku
Heroku CLI heroku pg:psql postgresql-concave-17821 --app eest3necochea-school
*/
//retorna un array con los datos de la base
function DbConnect(){
  $host     = "ec2-52-7-159-155.compute-1.amazonaws.com";
  $database = "d45iq9tlomq3kv";
  $user     = "vbplczzecsknma";
  $port     = "5432";
  $passw    = "a66f85ec92308f14d29b01ea8dc9198907de08134cd5c8d3db2b2753f22896ff";

  $conn_string  = "host=".$host." port=".$port." dbname=".$database." user=".$user." password=".$passw;
  $dbconn       = pg_connect($conn_string);

  if ($dbconn) {
    $result = pg_query($dbconn, "SELECT * FROM comments");
    echo "<h1> Todos los datos extraidos de la base de datos postgresql enlazada a heroku tabla 'comments' <h1>";
    echo "<pre>";

    while ($row = pg_fetch_row($result)) {
      $data[] = $row;
    }
  }else {
    echo "Error al conectar con la base de datos";
  }
  return $data;
}



?>
