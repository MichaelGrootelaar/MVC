<?php
  require_once('class/view.php');

  class Controller extends View {
    function actionIndex() {
      return $this->render('view/fun.php', array('wtf' => 'sdfasfas'));
    }
  }
?>
