<?php
class Add_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_kelas');
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }
    public function index()
    {
        $data['judul'] = 'Smart Classroom';
        if ($this->session->userdata('akses') == 'admin') {
            $this->load->view('templates/header', $data);
            $this->load->view('add_user/add_user');
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', '$.notify(
                {
                    icon: "flaticon-alarm-1",
                    title: "Error",
                    message: "Oops, access denied!"
                },
                {
                    type: "secondary",
                    placement: {
                        from: "top",
                        align: "right"
                    },
                    time: 800
                }
            );');
            redirect('home');
        }
    }

    function data_user()
    {

        $data = $this->user_kelas->user_list();
        echo json_encode($data);
    }

    function get_user()
    {
        $username = $this->input->get('username');
        $data = $this->user_kelas->get_user_by_user($username);
        echo json_encode($data);
    }

    function simpan_user()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $id_grup = $this->input->post('id_grup');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $tlp = $this->input->post('tlp');
        $data = $this->user_kelas->simpan_user($username, $pass, $id_grup, $name, $email, $tlp);
        echo json_encode($data);
    }

    function update_user()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $id_grup = $this->input->post('id_grup');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $tlp = $this->input->post('tlp');
        $data = $this->user_kelas->update_user($username, $pass, $id_grup, $name, $email, $tlp);
        echo json_encode($data);
    }

    function hapus_user()
    {
        $username = $this->input->post('username');
        $data = $this->user_kelas->hapus_user($username);
        echo json_encode($data);
    }
}
