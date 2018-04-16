<?php

class view
{
    public $msg=null;
    public function __construct() {
    
    } 
    public function render($name ,$inclde=true)
    {
        $eMessage=null;
        $file ="views/$name.php";

        if(file_exists($file)){
            if ($inclde)
            {
                require "views/shared/header.php";
                require $file;
                require "views/shared/footer.php";
            }
            else {
                require $file;
            }
         
        }   
        else {
            $eMessage.="<li>view <b> $name </b> Not Exists </li>";
        }

        if(isset($eMessage))
        {
            $eMessage="<ol>$eMessage</ol>";            
            require "controllers/error.php";
            $controller =new MVCerror($eMessage);
    
        }

    }

}