<?php

/**
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';  
        $source = $this->quotes->first();
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    
        
        $source = $this->quotes->get('1');
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
       
        $this->render();
    }
    
    function gimme($num) {
        $this->data['pagebody'] = 'justone';    
        
        $source = $this->quotes->get($num);
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
       
        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */