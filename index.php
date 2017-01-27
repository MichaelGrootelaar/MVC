<?php
  phpinfo();
  require_once('class/controller.php');

  $controller = new controller();

  echo $controller->actionIndex();
?>
