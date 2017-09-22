<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Instalación Contactos</title>
  </head>
  <body>
    <h1>Instalación Contactos</h1>
    <?php
      require_once "../config.php";
      $pdo = new PDO("pgsql:host={$host};{$port}",$user,$pass);
      $sql = "create database $dbname; use $dbname;";
      $pdo->exec($sql);

// creamos bbdd
      $sql = "CREATE table contacto(
        id SERIAL PRIMARY KEY,
        nombre VARCHAR(20),
        mail VARCHAR(60)
        )";
        $pdo->exec($sql);

//
        $sql = "INSERT INTO contacto(nombre, mail) values
        ('pepe', 'pepe@server.com'),
        ('concha', 'concha@email.net')";
        $pdo->exec($sql);
     ?>
+
     <p>base de datos creada. <a href="index.php">Ir a lista de contactos</a></p>
  </body>
</html>
