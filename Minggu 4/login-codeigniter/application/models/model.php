<?php
class Model extends CI_model{
    public function get_user($id = 0)
    {
        
        if ($id === 0)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }
    
    public function get_user_login($username, $password)
    {
        $query = $this->db->get_where('user', array('username' => $username, 'password'=>$password));        
        return $query->row_array();
    }
    
    public function set_user($id = 0)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'fname' => $this->input->post('fname')
        );
            
        if ($id == 0) {
            return $this->db->insert('user', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('user', $data);
        }
    }
    
    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }    
}