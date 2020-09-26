<?php
class Home_model extends CI_Model
{

        public function register($enc_password){
            // User data array
            $data = array(
                
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $enc_password,
               
            );

            // Insert user
            return $this->db->insert('users', $data);
        }




        public function login($username, $password){
            // Validate
            $this->db->where('username', $username);
            $this->db->where('password', $password);

            $result = $this->db->get('users');

            if($result->num_rows() > 0)
            {
                return $result->row(0)->user_id;
            } 
            else
            {
                return false;
            }
        }




    function insert_data($table,$data)
    {
       return  $this->db->insert($table,$data);
    }
    function get_data($limit,$offset)
    {
                $q=$this->db->select()
                    ->from('customer')
                    ->limit($limit,$offset)
                    ->get();
                return $q->result();
    }
    function num_rows($table)
    {
            $q=$this->db->select()
                    ->from($table)
                    ->get();
                return $q->num_rows();
    }
     function getretailer_data($limit,$offset)
    {
                $q=$this->db->select()
                    ->from('retailer')
                    ->limit($limit,$offset)
                    ->get();
                return $q->result();
    }
    function edit_data($id)
    {
            $this->db->where('id',$id);
            return $q=$this->db->get('customer')->result();
    }

     function update_data($id,$data)
     {
            $this->db->where('id',$id);
            return $this->db->update('customer',$data);
     }
      function retailer_edit_data($id)
    {
            $this->db->where('retailer_id',$id);
            return $q=$this->db->get('retailer')->result();
    }

      function retailerupdate_data($id,$data)
     {
            $this->db->where('retailer_id',$id);
            return $this->db->update('retailer',$data);
     }

    
    
    
//     function edit_data($id)
//     {
//             $this->db->where('id',$id);
//             return $q=$this->db->get('matrimony')->result();
//     }
//     function update_data($id,$data)
//     {
//             $this->db->where('id',$id);
//             return $this->db->update('matrimony',$data);
//     }
//     function get_data_row($id)
//     {            $this->db->where('id',$id);
//                 $q=$this->db->get('matrimony');
//                 return $q->result();
//     }
//     function insert_user($table,$data)
//     {
//        return  $this->db->insert($table,$data);
//     }
 }

?>