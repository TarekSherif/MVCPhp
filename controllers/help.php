<?php

class help  extends controller{
    
    public function __construct()  {
        parent::__construct();
       }

    // public function test($arg=null)
    // {
    //    echo "<br/> test";
    //    echo "<br/> $arg";
    //    require "model/help_model.php";
    //    $model =new help_model();
      
    // }

    public function index()
    {
        $this->view->msg= "<h1>help</h1><p>index</p>";
        $this->view->render("help/index");
    }
   
}
