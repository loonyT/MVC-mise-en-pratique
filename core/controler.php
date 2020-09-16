<?php

class Controller {

    
    
    //how to push variables into the view ? 
    var $vars = array();
    var $layout = 'default'; 
    function set($d) {
        //on fusionne les données envoyées avec les variablesdéjà présentes 
        
        $this->vars = array_merge($this->vars, $d);
        
    }
    
    
    
    
    
    function render($filename) {
        
        //comment passer des variables dans la vue ? =>
        $vars = array();
        $vars['tuto'] = array(
        
        'titre' => 'Salut',
            'description' => 'exemple de description',
        
        );
        
        extract($vars);
        require(ROOT.'views/'.get class($this).'/'.$filename.'.php'):
        
    }
    
    
    
} 

?>