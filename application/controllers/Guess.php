<?php

/**
 * The page for the fourth quote author.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Guess.php
 *
 * ------------------------------------------------------------------------
 */
class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // show the fourth quote author in the list
        $source = $this->quotes->get('4');
        $this->data += $source;

        $this->render();
    }

}

/* End of file Guess.php */
/* Location: application/controllers/Guess.php */