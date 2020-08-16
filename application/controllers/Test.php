<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  

  // $this->load->model('item_model');
 }
 

 function index()
 {
  die();
 }

 function list()
 {
    $user_id = $this->session->userdata('id');
    $this->db->select('distinct(itemName)');
    $this->db->from('items');
    $query = $this->db->get();
    $result=$query->result();

    $this->db->select('*');
    $this->db->from('items');
    $this->db->where('type','Test');
    $query = $this->db->get();
    $test=$query->result();
    

   
    $search_array = '';
    foreach ($result as $key => $value) {
      $search_array .= '"';
      $search_array .= $value->itemName;
      $search_array .= '",';

    }

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();

    $this->session->set_userdata('basket_count', $total_count->count);

    $search_array = rtrim($search_array, ".");
    $data['search_array'] = $search_array; 
    $data['test'] = $test; 

    $this->load->view('test/listing',$data);
 }


 function search()
 {

    $search = $this->input->post('search');
    $user_id = $this->session->userdata('id');

    $this->db->select('distinct(itemName)');
    $this->db->from('items');
    $query = $this->db->get();
    $result=$query->result();

    $this->db->select('*');
    $this->db->from('items');
    $this->db->where('type','Test');
    if($search != "")
    $this->db->where('itemName',$search);
    $query = $this->db->get();
    $test=$query->result();
    

   
    $search_array = '';
    foreach ($result as $key => $value) {
      $search_array .= '"';
      $search_array .= $value->itemName;
      $search_array .= '",';

    }

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();

    $this->session->set_userdata('basket_count', $total_count->count);

    $search_array = rtrim($search_array, ".");
    $data['search_array'] = $search_array; 
    $data['test'] = $test; 

    $this->load->view('test/listing',$data);
 }

 

}

?>