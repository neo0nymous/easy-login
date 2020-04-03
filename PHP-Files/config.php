<?php
  $host_name = 'IP';
  $database = 'DATABASE';
  $user_name = 'USERNAME';
  $password = 'PASSWORD';
  $connection = mysqli_connect($host_name, $user_name, $password, $database);

  if (mysqli_connect_errno()) {
    die('<p>Verbindung zum MySQL Server fehlgeschlagen: '.mysqli_connect_error().'</p>');
  } else {
    echo '';
  }
?>