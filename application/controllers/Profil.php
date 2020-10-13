<?php
class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_kelas');
        $this->load->model('profil_model');
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }
    public function index()
    {
        $data['judul'] = 'Smart Classroom';
        $data['user'] = $this->profil_model->tampil_data1($this->session->userdata('username'));
        if ($this->session->userdata('akses') == 'admin') {
            $this->load->view('templates/header', $data);
            $this->load->view('profil/profil');
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('akses') == 'user') {
            $this->load->view('templates/header1', $data);
            $this->load->view('profil/profil');
            $this->load->view('templates/footer');
        }
    }

    function data_user1()
    {
        $username = $this->session->userdata('ses_uname');
        $data = $this->profil_model->user_list1($username);
        echo json_encode($data);
    }

    function get_user1()
    {
        $username = $this->session->userdata('ses_uname');
        $data = $this->profil_model->get_user_by_user1($username);
        echo json_encode($data);
    }

    function update_user1()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $id_grup = $this->input->post('id_grup');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $tlp = $this->input->post('tlp');
        $data = $this->profil_model->update_user1($username, $pass, $id_grup, $name, $email, $tlp);
        echo json_encode($data);
    }
}
