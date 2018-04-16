<?php

class index extends controller
{


     function __construct()  {
      parent::__construct();
    }

    public function index()
    {
        $this->view->msg= "<h1>index</h1><p>index</p>";
        $this->view->render("index/index");
    }
    
}

