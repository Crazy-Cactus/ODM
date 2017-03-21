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

function ping($link)
{
  exec("ping ".$link, $ping);
  if(!empty($ping[10]))
  {
    ?>
      <div class="panneau">
        <ul>
          <li><?php echo('<span class="online">ONLINE</span>'); ?></li>
          <li><?php echo('SERVEUR : ' . $link); ?></li>
          <li><?php echo "<br/>"; ?></li>
          <li><?php echo ("PING : " . substr($ping[10], strrpos($ping[10], '=') + 1)); ?></li>
          <li><?php echo "<br/>"; ?></li>
          <li><?php echo "DNS : <span class='online'>ON</span>"; ?></li>
        </ul>
      </div>
    <?php
  }
  else
  {
    ?>
      <div class="panneau">
        <ul>
          <li><?php echo '<span class="offline">OFFLINE</span>'; ?></li>
          <li><?php echo('SERVEUR : ' . $link); ?></li>
        </ul>
      </div>
    <?php
  }
}
?>
