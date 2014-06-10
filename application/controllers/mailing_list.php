<?php

    class Mailing_list extends CI_Controller{
   	 
   	 function __construct(){
   		 parent::__construct();
   		 $this->load->helper('url');
		 }//end constructor
   	 
   	 public function index(){
   		 
   		 $data['title'] = "Here is our title tag!";
   		 $data['style'] = "cerulean.css";
   		 $data['banner'] = "Here is our web site!";
   		 $data['copyright'] = "copyright goes here!";
   		 $data['base_url'] = base_url();
   		 $this->load->view('header',$data);
   		 $this->load->view('view_form',$data);
   		 $this->load->view('footer',$data);
   	 }//end index

    
    }

   
?>