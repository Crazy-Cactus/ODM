<?php
  $page = 'index';
  require_once('init.php');
  require_once('header.php');

if (isset($_SESSION["Admin"]) && $_SESSION["Admin"] == True)
{
  if(isset($_GET["logout"]) && $_GET["logout"] == True)
  {
    $_SESSION["Admin"] = False;
    header("location: index.php");
    die();
  }
  else
  {
    echo "vous etes deja connecté";
  }
}
else
{
  if (isset($_POST["adresse"]) && isset($_POST["mdp"]))
  {
    if (empty($_POST["adresse"]) || empty($_POST["mdp"]))
    {
      echo 'Veux-tu bien renseigner tous les champs !';
    }
    else
    {
      $password = $_POST["mdp"];
      $login = $_POST["adresse"];
      $tab_user = recup_user();

      foreach ($tab_user as $num => $user)
      {
        if ($login == $user['adresse'] && $password == $user['mdp'])
        {
          $_SESSION['Admin'] = true;
          header('location: ping.php');
          die();
        }
      }
      echo "<p> tu tes trompé </p>";
    }
  }
  ?>

  <form class="" action="index.php" method="post">
    <input type="email" name="adresse" placeholder="Adresse email">
    <input type="password" name="mdp" placeholder=" Mot de passe ">
    <input type="submit" name="submit" value="SQUALALAA!">
  </form>

  <?php
}
  require_once('footer.php');
?>
