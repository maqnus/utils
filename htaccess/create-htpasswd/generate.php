

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Password to be encrypted for a .htpasswd file
    $clearTextPassword = $_POST["pw"];

    // Encrypt password
    $password = crypt($clearTextPassword, base64_encode($clearTextPassword));

    // Print encrypted password
    //echo $password;

    ?>

    <pre>
      <?php echo $_POST["name"]; ?>:<?php echo $password; ?>
    </pre>
  </body>
</html>
