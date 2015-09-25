<?php

/**
 * The page for the fifth and sixth quote author.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the fifth quote author in the list
        $source = $this->quotes->get('5');
        $this->data += $source;

        $this->render();
    }
    
    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the sixth quote author in the list
        $source = $this->quotes->get('6');
        $this->data += $source;

        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */