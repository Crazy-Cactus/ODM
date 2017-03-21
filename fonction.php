<?php
  function connection()
  {
    global $config;
    try
    {
      $db = new PDO($config['dsn'],$config['username']);
      $db -> exec('SET CHARACTER SET UTF8');
    }
    catch (PDOException $e)
    {
      die($e -> getMessage());
    }
    return $db;
  }

  function recup_user()
  {
    global $db;
    $resultat = $db->query('SELECT * FROM users');
    return $resultat;
  }
?>
