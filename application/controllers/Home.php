<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
        $this->load->model('user_kelas');
        $this->load->model('home_model');
    }

    public function index()
    {
        $data['judul'] = 'Smart Classroom';
        $data['user'] = $this->user_kelas->tampil_data($this->session->userdata('username'));
        if ($this->session->userdata('akses') == 'admin') {
            $this->load->view('templates/header', $data);
            $this->load->view('home/index');
            $this->load->view('templates/footer');
        } else if ($this->session->userdata('akses') == 'user') {
            $this->load->view('templates/header1', $data);
            $this->load->view('home/index1');
            $this->load->view('templates/footer');
        }
    }

    function data_device()
    {
        $data = $this->home_model->device_ctrl();
        echo json_encode($data);
    }

    function update_lampu1()
    {
        $lampu1 = $this->input->post('lampu1');
        $data = $this->home_model->update_lampu1($lampu1);
        echo json_encode($data);
    }

    function update_lampu2()
    {
        $lampu2 = $this->input->post('lampu2');
        $data = $this->home_model->update_lampu2($lampu2);
        echo json_encode($data);
    }

    function update_projector()
    {
        $projector = $this->input->post('projector');
        $data = $this->home_model->update_projector($projector);
        echo json_encode($data);
    }

    function update_ac1()
    {
        $ac1 = $this->input->post('ac1');
        $data = $this->home_model->update_ac1($ac1);
        echo json_encode($data);
    }

    function update_ac2()
    {
        $ac2 = $this->input->post('ac2');
        $data = $this->home_model->update_ac2($ac2);
        echo json_encode($data);
    }

    /* function update_temp()
    {
        $suhu = $this->input->post('suhu');
        $kelembapan = $this->input->post('kelembapan');
        $data = $this->home_model->update_temp($suhu, $kelembapan);
        echo json_encode($data);
    } */

    function logout()
    {
        $this->session->sess_destroy();
        $url = base_url('');
        redirect($url);
    }
}
