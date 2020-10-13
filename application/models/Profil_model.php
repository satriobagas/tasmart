<?php
class Profil_model extends CI_Model
{

    function user_list1($username)
    {
        $query = $this->db->query("SELECT * FROM login WHERE username='$username'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil = array(
                    'username' => $data->username,
                    'pass' => $data->pass,
                    'id_grup' => $data->id_grup,
                    'name' => $data->name,
                    'email' => $data->email,
                    'tlp' => $data->tlp,
                );
            }
            return $hasil;
        }
    }

    function get_user_by_user1($username)
    {
        $hsl = $this->db->query("SELECT * FROM login WHERE username='$username'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'username' => $data->username,
                    'pass' => $data->pass,
                    'id_grup' => $data->id_grup,
                    'name' => $data->name,
                    'email' => $data->email,
                    'tlp' => $data->tlp,
                );
            }
            return $hasil;
        }
    }

    function update_user1($username, $pass, $id_grup, $name, $email, $tlp)
    {
        $hasil = $this->db->query("UPDATE login SET username='$username',pass=md5('$pass'),id_grup='$id_grup',name='$name',email='$email',tlp='$tlp' WHERE username='$username'");
        return $hasil;
    }

    function tampil_data1($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('login');
        $query->row();
    }
}
