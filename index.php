<?php
  require_once('class/view.php');
  require_once('class/model.php');
  require_once('class/controller.php');

  //initiate the triad
  $model = new Model();

  //It is important that the controller and the view share the model
  $controller = new Controller($model);

  $view = new View($model);

  echo $view->output();
?>
