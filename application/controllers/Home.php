<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
        parent::__construct(); 
		$this->load->model('Home_model');

    }
	
	public function index()
	{
		is_login();
		$this->load->view('header');
		$this->load->view('main');
		$this->load->view('footer');

	}
	public function registration()
	{
		$this->load->view('loginheader');
		$this->load->view('demo/registration');
		$this->load->view('footer');
	}

	  public function register_user()
	  { 
	  		$data['title'] = 'Sign Up';
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			if($this->form_validation->run() === FALSE){
				$this->load->view('loginheader');
				$this->load->view('demo/registration', $data);
				$this->load->view('footer');
			}
			else
			  {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->Home_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('Home/login');
			}
	  }

	  public function login()
	{
		$this->load->view('loginheader');
		if(isset($_SESSION['user_data']))
		{
    		redirect( base_url().'Home', 'refresh');
    	}   
		 
		$this->load->view('demo/login');
	
	}
	public function login_user(){
			$data['title'] = 'Log In';
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('loginheader');
				$this->load->view('demo/login',$data);
				$this->load->view('footer');
			} else 
			{
				
				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));
				// Login user
				$user_id = $this->Home_model->login($username, $password);

				if($user_id)
					{
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);
					//set session variable
					$this->session->set_userdata('user_data',$user_data);
					// Set message using session
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');
					redirect('Home');
					}
					else 
					{
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');
					redirect('Home/login');
					
					}
			}
		}


	 public function logout(){
        is_login();
        $this->session->unset_userdata('user_data');               
        redirect( base_url().'Home/login', 'refresh');
    }

	  
		




	public function customer()
	{
		is_login();
		$this->load->view('header');
		$this->load->view('customer');
		$this->load->view('footer');
	}
	
	public function customer_edit($id='')
	{
		is_login();
		$this->load->view('header');
		 
		$data['row'] =$this->Home_model->edit_data($id);
		$this->load->view('customer_edit',$data);
		$this->load->view('footer');
	}

	function updatedata(){
		is_login();
	
			$this->form_validation->set_error_delimiters('', '');
			$this->form_validation->set_rules('customer_name','customer Name','required');

	    if ($this->form_validation->run() == FALSE)
	    {
	   
	    	 echo validation_errors();
	    	
	    } 
	    else 
	    {
	    
	    
	    	  $data['id']			    = $this->input->post('id');
		      $data['customer_name']	= $this->input->post('customer_name');
		      $data['product']			= $this->input->post('product');
			  $data['customer_mobile']  = $this->input->post('customer_mobile');
			  $data['total_pay']	    = $this->input->post('total_pay');
			  $data['due_pay']			= $this->input->post('due_pay');
			  $data['cash']				=  $this->input->post('cash');;
				
			
			   	$id    = $this->input->post('id');
			   $response = $this->Home_model->update_data($id,$data);
	           
	           if($response)
	           {
				redirect('Home/customertable','refresh');
	           }
	           else
	           {
	            echo 'Error try again!';
	           }
			 
			   
	}
}

	function customer_delete($id='')
	{
		is_login();
		$this->db->where('id',$id);
		$this->db->delete('customer');
		redirect('Home/customertable','refresh');
	}

	function retailer_delete($id='')
	{
		is_login();
		$this->db->where('retailer_id',$id);
		$this->db->delete('retailer');
		redirect('Home/retailertable','refresh');
	}

	function insertdata()
	{
		is_login();
	  
		
		$this->form_validation->set_error_delimiters('', '');
		$this->form_validation->set_rules('customer_name','Customer Name','required');
		$this->form_validation->set_rules('customer_mobile', 'Contact No.', 'regex_match[/^[0-9]{10}$/]');

	    if ($this->form_validation->run() == FALSE)
	    {
	      
		$this->load->view('header');
		$this->load->view('customer');
		$this->load->view('footer');
	    	
	    	
	    } 
   		 else 
    	{
    
    	
	      $data['customer_name'] = $this->input->post('customer_name');
	      $data['product']	= $this->input->post('product');
	      $data['customer_mobile']= $this->input->post('customer_mobile');
	      $data['total_pay']= $this->input->post('total_pay');
	      $data['due_pay']	 = $this->input->post('due_pay');
	      $data['cash']	   = $this->input->post('cash');
			
			
		
		   
		   $response = $this->Home_model->insert_data('customer',$data);
           
           if($response)
           {
			redirect('Home/customertable','refresh');
           }
           else
           {
            echo 'Error try again!';
           }
		  // $this->matrimonial->insertdata($data);
		  //$this->db->insert('matrimony',$data);

		}  
		
}

	public function customertable()
	{
		is_login();
		//libraray 
		$this->load->view('header');
		
		$this->load->library('pagination');
		$config=[
			'base_url'=>base_url('home/customertable'),
			'per_page'=>3,
			'total_rows'=>$this->Home_model->num_rows('customer'),
		];
		$config['full_tag_open'] = '<div class="paginations"><ul class="pagination">';
    $config['full_tag_close'] = '</ul></div>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '«';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '»';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] =  '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config["num_links"] = 1;
	 
	 
	            $config['next_link'] = 'Next';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';

                $config['prev_link'] = 'Previous';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
		$config['pages'] = $this->pagination->create_links();
		$this->pagination->initialize($config);

		$data['data']=$this->Home_model->get_data($config['per_page'],$this->uri->segment(3));


		$this->load->view('customertable',$data);
		$this->load->view('footer');
	}
	public function retailer()
	{
		is_login();
		$this->load->view('header');
		$this->load->view('retailer');
		$this->load->view('footer');
	}
	
	public function retailer_data(){
		is_login();
	   
		
$this->form_validation->set_error_delimiters('', '');
$this->form_validation->set_rules('retailer_name','Retailer Name','required');
$this->form_validation->set_rules('retailer_mobile', 'Contact No.', 'regex_match[/^[0-9]{10}$/]');

    if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('header');
		$this->load->view('retailer');
		$this->load->view('footer');
    	
    } 
    else 
    {
    
    
    	
	      $data['retailer_name'] = $this->input->post('retailer_name');
	      $data['product']	= $this->input->post('product');
	      $data['retailer_mobile']= $this->input->post('retailer_mobile');
	      $data['total_pay']= $this->input->post('total_pay');
	      $data['due_pay']	 = $this->input->post('due_pay');
	      $data['cash']	   = $this->input->post('cash');
			
			
		
		 
		   
		   $response = $this->Home_model->insert_data('retailer',$data);
           
           if($response)
           {
			redirect('Home/retailertable','refresh');
           }
           else
           {
            echo 'Error try again!';
           }
		  // $this->matrimonial->insertdata($data);
		  //$this->db->insert('matrimony',$data);
		   
}

}
	public function retailer_edit($id='')
	{
		is_login();
		$this->load->view('header');
		 
		$data['row'] =$this->Home_model->retailer_edit_data($id);
		$this->load->view('retailer_edit',$data);
		$this->load->view('footer');
	}

	function retailerupdatedata(){
		is_login();
	    
		
$this->form_validation->set_error_delimiters('', '');
$this->form_validation->set_rules('retailer_name','retailer Name','required');

    if ($this->form_validation->run() == FALSE)
    {
        
    	 echo validation_errors();
    	
    } 
    else 
    {
    
    
    		$data['retailer_id']			            = $this->input->post('retailer_id');
	      $data['retailer_name']			            = $this->input->post('retailer_name');
	      $data['product']			            = $this->input->post('product');
			$data['retailer_mobile']			            = $this->input->post('retailer_mobile');
			$data['total_pay']				= $this->input->post('total_pay');
			$data['due_pay']				= $this->input->post('due_pay');
			$data['cash']				=  $this->input->post('cash');;
			
		
		   	$id    = $this->input->post('retailer_id');
		   $response = $this->Home_model->retailerupdate_data($id,$data);
           
           if($response)
           {
			redirect('Home/retailertable','refresh');
           }
           else
           {
            redirect('Home/retailer_edit','refresh');
           }
		  // $this->matrimonial->insertdata($data);
		  //$this->db->insert('matrimony',$data);
		   
}
}
	
	public function retailertable()
	{
		is_login();
		//libraray 
		$this->load->view('header');
		$this->load->library('pagination');
		$config=[
			'base_url'=>base_url('home/retailertable'),
			'per_page'=>3,
			'total_rows'=>$this->Home_model->num_rows('retailer'),
		];
		$config['full_tag_open'] = '<div class="paginations"><ul class="pagination">';
    $config['full_tag_close'] = '</ul></div>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '«';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '»';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] =  '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config["num_links"] = 1;
	 
	 
	            $config['next_link'] = 'Next';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';

                $config['prev_link'] = 'Previous';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
		$config['pages'] = $this->pagination->create_links();
		$this->pagination->initialize($config);

		$data['data']=$this->Home_model->getretailer_data($config['per_page'],$this->uri->segment(3));


		$this->load->view('retailertable',$data);
		$this->load->view('footer');
	}


}
	