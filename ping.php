<?php
require_once('init.php');
require_once('header.php');
$page = 'ping';
$serveurs = ['google.fr', 'ffring.com', 'tamer.com'];

foreach ($serveurs as $serveur)
{
  ping($serveur);
}
?>
<a href="ping.php">PING</a>

<?php
  require_once('footer.php');
?>
