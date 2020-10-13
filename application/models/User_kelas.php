<?php
class User_kelas extends CI_Model
{

    function user_list()
    {
        $query = $this->db->query("SELECT * FROM login");
        return $query->result();
    }

    function simpan_user($username, $pass, $id_grup, $name, $email, $tlp)
    {
        $hasil = $this->db->query("INSERT INTO login (username,pass,id_grup,name,email,tlp,last_login,create_login) VALUES ('$username',md5('$pass'),'$id_grup','$name','$email','$tlp',NOW(),NOW())");
        return $hasil;
    }

    function get_user_by_user($username)
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

    function update_user($username, $pass, $id_grup, $name, $email, $tlp)
    {
        $hasil = $this->db->query("UPDATE login SET username='$username',pass=md5('$pass'),id_grup='$id_grup',name='$name',email='$email',tlp='$tlp' WHERE username='$username'");
        return $hasil;
    }

    function hapus_user($username)
    {
        $hasil = $this->db->query("DELETE FROM login WHERE username='$username'");
        return $hasil;
    }

    function tampil_data($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('login');
        $query->row();
    }
}
