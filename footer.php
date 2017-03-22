    </main>

    <footer>
      <?php
        if ($_SESSION['Admin'] == True)
        {
          if ($page != 'ping')
          {
            ?> <a href="ping.php">Panneau</a> | <?php
          }
          elseif ($page != 'journal')
          {
            ?> <a href="journal.php">Journal d'erreurs</a> | <?php
          }
          ?>
            <a href="index.php?logout=True">Se deconnecter</a>
          <?php
        }
      ?>
    </footer>
  </body>
</html>
