<?php
  $desired = $_POST["LEDState"];
  $count = $_POST["count"];
  $command = exec("sh ./myscript.sh $desired $count");
  echo $command;
?>
