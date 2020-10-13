<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('user_kelas');
        $this->load->model('history_model');
    }

    public function index()
    {
        $data['judul'] = 'Smart Classroom';
        $data['user'] = $this->user_kelas->tampil_data($this->session->userdata('username'));
        if ($this->session->userdata('akses') == 'admin') {
            $this->load->view('templates/header', $data);
            $this->load->view('history/history');
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

    function device_history()
    {
        $data = $this->history_model->device_history();
        echo json_encode($data);
    }

    function delete_data()
    {
        if ($this->input->post('checkbox_value')) {
            $no = $this->input->post('checkbox_value');
            for ($count = 0; $count < count($no); $count++) {
                $this->history_model->delete($no[$count]);
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
}
