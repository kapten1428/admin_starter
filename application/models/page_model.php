<?php

class Page_model extends MY_Model{
    protected $_table_name = 'pages';
    protected $_primary_key = 'id_page';
    protected $_primary_filter = 'intval';
    protected $_order_by = '' ;
    protected $_rules = array();
    protected $_timestamps = FALSE;
}