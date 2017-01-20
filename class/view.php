<?php
  abstract class View {
    /**
    * Renders the pages.
    * @param $file = String, $variables = Array
    * @return ??
    */
    function render($file, $variables = array()) {
        extract($variables);

        ob_start();
        include $file;
        $renderedView = ob_get_clean();

        return $renderedView;
    }
  }
