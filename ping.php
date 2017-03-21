<?php
require_once('init.php');
require_once('header.php');
$page = 'ping';

  exec("ping google.fr", $ping);
  if(isset($ping[10]))
  {
    ?>
      <p class="panneau">
        <?php echo('ONLINE : Ping = ' . substr($ping[10], -6)); ?>
      </p>
    <?php
  }
  else
  {
    ?>
      <p>
        <?php echo "OFFLINE"; ?>
      </p>
    <?php
  }
?>
<a href="ping.php">PING</a>

<?php
  require_once('footer.php');
?>
