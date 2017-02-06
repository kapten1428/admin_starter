<?php

class MY_Model extends CI_Model{
    
    protected $_table_name = '';
    protected $_primary_key = '';
    protected $_primary_filter = '';
    protected $_order_by = '';
    protected $_rules = array();
    protected $_timestamps = FALSE;
    
    public function __construct(){
        parent::__construct();
    }
    
    public function get($id = NULL){
        
        if($id !== NULL){
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key,$id);
            $method = 'row';
        }else{
            $method = 'result';
        }
        return $this->db->get($this->_table_name)->$method();
    }
    
    public function get_by(){}
    
    public function save(){}
    
    public function delete(){}
}