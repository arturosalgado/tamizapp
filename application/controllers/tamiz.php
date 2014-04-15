<?php

class tamiz extends MY_Controller{
    
    
    
    function __construct() {
        parent::__construct();
    }
    
    
    function Content()
    {
       if ($this->view=='form') 
       return  $this->load->view("admin/tamiz/form",  $this->data,true);     
       else
       return  $this->load->view("admin/tamiz/list_view",  $this->data,true);  
        
    }
    
    
    function form()
    {
        
        $this->view = 'form';
        $this->index();
        
    }
    
    
    
}