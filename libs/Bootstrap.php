<?php

class Bootstrap
{
    public function __construct() {
        $eMessage=null;
  
            $url=(isset($_GET["url"])?$_GET["url"]:"index");

            $url=rtrim($url,"/");
            $url=explode("/",$url);

            $file ="controllers/$url[0].php";

            if(file_exists($file))
            {
                require $file;
                $controller =new $url[0];
                $Action= (isset( $url[1])?$url[1]:"index");
               
                    
                    if(method_exists($controller,$Action))
                    {
                        if(isset( $url[2]))
                        {
                            $controller->{$Action}( $url[2])  ;
                        }
                        else
                        {
                            $controller->{$Action}()  ;
                        }
                    }
                    else{
                        $eMessage.="<li>Action <b>  $Action </b> Not Exists </li>";
                    }
                  
                
                
            }
            else{
               $eMessage.="<li>Controller <b> $url[0] </b> Not Exists </li>";
             }
    
      

        
        

        if(isset($eMessage))
        {
            $eMessage="<ol>$eMessage</ol>";
            
            require "controllers/error.php";

            $controller =new MVCerror($eMessage);
    
        }
      
        
    }
}
