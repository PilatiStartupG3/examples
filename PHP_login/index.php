<?php
  session_start();
 ?>



<html>
<head>
  <meta charset="utf-8">
</head>

<body>
  <p>Ciao, l'utente che ha effettuato l'accesso è:
    <?php
      if(isset($_SESSION["utente"]))
        echo $_SESSION["utente"];
      else
          echo "NESSUNO";

     ?>
  </p>

  <a href="login.php">Accedi</a>
  <a href="chiudi.php">Esci</a>

</body>


</html>
