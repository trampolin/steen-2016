<?php
/**
 * Created by PhpStorm.
 * User: rmahr1
 * Date: 13.10.15
 * Time: 21:14
 */
class Home extends STEEN_Controller {



    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('partials/head');
        $this->load->view('partials/foot');
    }
}