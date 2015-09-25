<?php

/**
 * The page for the first quote author.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the first quote author in the list
        $source = $this->quotes->first();
        $this->data += $source;

        $this->render();
    }
    
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the first quote author in the list
        $source = $this->quotes->get('1');
        $this->data += $source;

        $this->render();
    }
    
    function gimme($id) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the author specified by gimme/$id
        $source = $this->quotes->get($id);
        $this->data += $source;

        $this->render();
    }

}

/* End of file First.php */
/* Location: application/controllers/First.php */