<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Crud extends CI_Controller {  
      //functions  
      function test(){  
          is_login();
           $data["title"] = "Customer Table";  
           $this->load->view('crud_view', $data); 
      }  
      function fetch_user(){  
        is_login();
           $this->load->model("crud_model");  
           $fetch_data = $this->crud_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                
                $sub_array = array();  
                $sub_array[] = $row->id;
                $sub_array[] = $row->customer_name;  
                $sub_array[] = $row->product;  
                $sub_array[] = $row->customer_mobile;  
                $sub_array[] = $row->total_pay;  
                $sub_array[] = $row->due_pay; 
                $sub_array[] = $row->cash;
                $sub_array[] = '<a href=""><button type="button" name="edit" id="'.$row->id.'" class="btn btn-warning btn-sm">Edit</button></a>';  
                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-sm">Delete</button>';  
                   
               
                $data[] = $sub_array; 
       
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->crud_model->get_all_data(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output);  
      }  
 }  