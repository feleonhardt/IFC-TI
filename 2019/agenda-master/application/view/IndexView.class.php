<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexView
 *
 * @author Alan
 */
class IndexView extends View
{
    public function __construct()
    {
        parent::__construct();
        $this->display('contentHome');
    }
}

?>
