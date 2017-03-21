<?php
$page = 'ping';
require_once('init.php');
require_once('header.php');
//$serveurs = ['192.168.200.25', '192.168.200.30'];
$serveurs = ['google.fr', 'ffring.com', '412395472854.com'];

foreach ($serveurs as $serveur)
{
  ping($serveur);
}
?>
<a href="ping.php" class="ping">PING</a>

<?php
  require_once('footer.php');
?>
