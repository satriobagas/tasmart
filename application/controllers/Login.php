<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != FALSE) {
            $url = base_url('home');
            redirect($url);
        }
        $this->load->library('form_validation');
        $this->load->model('login_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Login';
            $this->load->view('templates/login_header', $data);
            $this->load->view('login/login');
            $this->load->view('templates/login_footer');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {

        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
        $cek_user = $this->login_model->auth_user($username, $password);

        if ($cek_user->num_rows() > 0) {
            $data = $cek_user->row_array();
            $this->session->set_userdata('masuk', TRUE);
            if ($data['id_grup'] == 'admin') { //Akses admin
                $this->session->set_userdata('akses', 'admin');
                $this->session->set_userdata('ses_id', $data['name']);
                $this->session->set_userdata('ses_name', $data['id_grup']);
                $this->session->set_userdata('ses_email', $data['email']);
                $this->session->set_userdata('ses_uname', $data['username']);
                date_default_timezone_set("ASIA/JAKARTA");
                $this->db->where('username', $data['username']);
                $this->db->update('login', array('last_login' => date('Y-m-d H:i:s')));
                redirect('home');
            } else if ($data['id_grup'] == 'user') { //Akses user
                $this->session->set_userdata('akses', 'user');
                $this->session->set_userdata('ses_id', $data['name']);
                $this->session->set_userdata('ses_name', $data['id_grup']);
                $this->session->set_userdata('ses_email', $data['email']);
                $this->session->set_userdata('ses_uname', $data['username']);
                date_default_timezone_set("ASIA/JAKARTA");
                $this->db->where('username', $data['username']);
                $this->db->update('login', array('last_login' => date('Y-m-d H:i:s')));
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('message', '$.notify(
                {
                    icon: "flaticon-alarm-1",
                    title: "Error",
                    message: "Wrong username or password!"
                },
                {
                    type: "secondary",
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                    time: 1000
                }
            );');
            redirect('login');
        }


        /* if ($login) {
            //isidata
            if (password_verify($password, $login['password'])) {
                $data = [
                    'username' => $login['username'],
                    'id_grup' => $login['id_grup']
                ];
                $this->session->set_userdata($data);
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not Registered!</div>');
            redirect('login');
        } */
    }
    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('login');
        redirect($url);
    }
}
