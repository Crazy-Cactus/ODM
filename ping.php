<?php
$page = 'ping';
require_once('init.php');
require_once('header.php');
$serveurs = ['google.fr', 'ffring.com', 'tamer.com'];

foreach ($serveurs as $serveur)
{
  ping($serveur);
}
?>
<a href="ping.php" class="ping">PING</a>

<?php
  require_once('footer.php');
?>
