<?php
class Login_model extends CI_Model
{
    //cek user dan password 
    function auth_user($username, $pass)
    {
        $query = $this->db->query("SELECT * FROM login WHERE username='$username' AND pass=MD5('$pass') LIMIT 1");
        return $query;
    }
}
