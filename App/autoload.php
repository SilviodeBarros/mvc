<?php

spl_autoload_register(function($nomedaclasse) {
    
  $classe = str_replace('\\', DIRECTORY_SEPARATOR, $nomedaclasse);
  $arquivo = BASE_DIR . "/" . $classe . ".php";
  
  if(file_exists($arquivo))
      include $arquivo;
     else 
        echo 'A classe nao existe.';
    
});