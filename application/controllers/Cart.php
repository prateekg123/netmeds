<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('basket_model');
  

  // $this->load->model('item_model');
 }
 

 function index()
 {
  $user_id = $this->session->userdata('id');
    $this->db->select('*');
    $this->db->from('baskets');
    $this->db->join ( 'items', 'items.id = baskets.item_id' );
    $this->db->where('user_id',$user_id);
    $query = $this->db->get();
    $cart_data=$query->result();
    $data['cart_data'] = $cart_data;

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);

   $this->load->view('cart',$data);
 }

 function add()
 {


    $item_id = $this->input->post('item_id');
    $user_id = $this->session->userdata('id');
    $common_id = 0;
    $update = 0;
    $count = 1;
    $this->db->select('common_id');
    $this->db->from('baskets');
    $this->db->where('user_id',$user_id);
    $query = $this->db->get();
    $common_id_array=$query->result();

    if(count($common_id_array) == 0){
      $this->db->select_max('common_id');
      $query = $this->db->get('baskets');
      $last_common_id=$query->result();


      if($last_common_id[0]->common_id == ""){
        $common_id = 1;
      }else{
        $common_id = $last_common_id->common_id + 1;
      }
      
    }else{

      $this->db->select('count');
      
      $this->db->where('user_id',$user_id);
      $this->db->where('item_id',$item_id);
      $query = $this->db->get('baskets');
      $new_count=$query->row();


      if($new_count->count == ""){
        
      }else{
        $update = 1;
        $count = $new_count->count + 1;
      }
      $common_id = $common_id_array[0]->common_id;
    }

    if($update == 1){
      $this->db->set('count', $count);
      $this->db->where('user_id',$user_id);
      $this->db->where('item_id',$item_id);
      $this->db->update('baskets');
      $query->result();
    }else{
      $data = array(
        'item_id'  => $item_id,
        'user_id'  => $user_id,
        'common_id' => $common_id,
        'count' => 1,
       );
       $id = $this->basket_model->insert($data);


     
    }

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);


    redirect(base_url()."test/list");
    // $this->db->select('distinct(itemName)');
    // $this->db->from('items');
    // $query = $this->db->get();
    // $result=$query->result();

    // $this->db->select('*');
    // $this->db->from('items');
    // $this->db->where('type','Test');
    // $query = $this->db->get();
    // $test=$query->result();
    

   
    // $search_array = '';
    // foreach ($result as $key => $value) {
    //   $search_array .= '"';
    //   $search_array .= $value->itemName;
    //   $search_array .= '",';

    // }

    // $search_array = rtrim($search_array, ".");
    // $data['search_array'] = $search_array; 
    // $data['test'] = $test; 

    // $this->load->view('test/listing',$data);
 }
 function remove($item_id){
    $user_id = $this->session->userdata('id');
    $this->db->where('item_id', $item_id);
    $this->db->where('user_id', $user_id);
    $this->db->delete('baskets');
    redirect(base_url().'cart');
    die();

 }

 function orderDetails()
 {
  $user_id = $this->session->userdata('id');
    $this->db->select('*');
    $this->db->from('baskets');
    $this->db->join ( 'items', 'items.id = baskets.item_id' );
    $this->db->where('user_id',$user_id);
    $query = $this->db->get();
    $cart_data=$query->result();
    $data['cart_data'] = $cart_data;

    
    $this->db->where('user_id', $user_id);
    $this->db->delete('baskets');

    $this->db->select_sum('count'); 
    $this->db->where('user_id',$user_id);
    $query = $this->db->get('baskets');
    $total_count=$query->row();
    $this->session->set_userdata('basket_count', $total_count->count);


   $this->load->view('orderDetail',$data);
 }

 

}

?>