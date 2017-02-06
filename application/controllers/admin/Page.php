<?php

class Page extends Frontend_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('page_model');
    }
    
    public function Index(){
        $page = $this->page_model->get(1);
        var_dump($page);
    }
}