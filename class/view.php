<?php
  abstract class View {
    /**
    * Path of the page.
    * @var String
    */
    private $filepath;
    /**
    * Path of the page.
    * @var Array
    */
    private $vars

    /**
    * Constructs the view.
    * @param $filepath = String, $vars = Array
    * @return Void
    */
    function __construct($filepath, $vars = array()) {
      $this->filepath = $filepath;
      $this->vars = $vars;
    }

    /**
    * Sets Filepath variable.
    * @param $vars = Array
    * @return Void
    */
    function setFilepath($filepath) {
      $this->filepath = $filepath;
    }
    /**
    * Gets Filepath variable.
    * @return Array
    */
    function getFilepath() {
      return $this->filepath;
    }

    /**
    * Sets Vars variable.
    * @param $vars = Array
    * @return Void
    */
    function setVars($vars) {
      $this->vars = $vars;
    }
    /**
    * Gets Vars variable.
    * @return Array
    */
    function getVars() {
      return $this->vars;
    }
    /**
    * Has the array in the Vars array.
    * @param $vars = Array
    * @return Boolean
    */
    function hasVars($vars) {
      return ($vars == $this->vars) ? true : false;
    }

    /**
    * Renders the pages.
    * @param $file = String, $vars = Array
    * @return ??
    */
    function render($file, $vars = array()) {
        extract($vars);

        ob_start();
        include $file;
        $renderedView = ob_get_clean();

        return $renderedView;
    }
  }
