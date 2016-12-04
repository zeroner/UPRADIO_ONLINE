<?php
Class Users extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password, privileges');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function get_users()
 {
   $query = $this->db->get('users');
   return $query;
 }

 function set_users()
 {
   $this->load->helper('url');

   $data = array(
       'title' => $this->input->post('title'),
       'slug' => $slug,
       'text' => $this->input->post('text')
   );

   return $this->db->insert('news', $data);
 }
}
?>
