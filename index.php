<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php_ex_1_AR</title>
  </head>
  <body>
    <?php
    $testodacensurare="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    print $testodacensurare;
    print "<br><br> Lunghezza Testo:" . strlen($testodacensurare);

    $parola1=$_GET['parola1'];
    $parola2=$_GET['parola2'];
    $arrayParoleCensurate=[$parola1,$parola2];
    echo "<br><br>" . "PAROLE DA CENSURARE: " . $parola1 . " - " . $parola2;

    echo "<br><br>" . (str_ireplace($arrayParoleCensurate,"***",$testodacensurare,$contatore));
    echo "<br><br>" . "BADWORD INDEX: $contatore";
    ?>
  </body>
</html>
