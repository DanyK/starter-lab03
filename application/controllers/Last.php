<?php

/**
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';    
        
        $source = $this->quotes->last();
        
        $this->data['mug'] = $source['mug'];
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];

        $this->render();
    }
}

/* End of file Last.php */
/* Location: application/controllers/Last.php */