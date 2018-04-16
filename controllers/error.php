<?php
class MVCerror  extends controller
{
  public function __construct($arg) {
      parent::__construct();
        $this->view->msg= "<h1>Error</h1><p>$arg</p>";
        $this->view->render("error/index");
   
  }
    
}
