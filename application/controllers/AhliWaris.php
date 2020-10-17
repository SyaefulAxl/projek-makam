<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AhliWaris extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Ahliwaris");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ahliwaris"] = $this->M_Ahliwaris->getAll();
        if ($this->input->post('keyword')) {
            $data['ahliwaris'] = $this->M_Ahliwaris->cariDataAhliwaris();
        }
        //print_r($data);
        $this->load->view('ahliwaris/index', $data);
    }

    public function Tambah()
    {
        $this->load->library('form_validation');

        //$this->form_validation->set_rules('id_makam', 'register', 'required|numeric');
        $this->form_validation->set_rules('id_makam', 'ID Makam', 'required|numeric');
        $this->form_validation->set_rules('alamat_ahliwaris', 'Alamat ahliwaris', 'required');
        $this->form_validation->set_rules('nik_ahliwaris', 'NIK Ahliwaris', 'required|numeric');


        if ($this->form_validation->run() == FALSE) {


            $this->load->view('ahliwaris/tambah');
        } else {
            $this->M_Ahliwaris->tambahDataAhliwaris();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('/ahliwaris');
        }
    }


    function detail($id_ahliwaris)
    {

        $where = array('id_ahliwaris' => $id_ahliwaris);
        $data['ahliwaris'] = $this->M_Ahliwaris->edit_data($where, 'ahliwaris')->row();
        $this->load->view('ahliwaris/detail', $data);
    }

    function hapus($id_ahliwaris)
    {
        $where = array('id_ahliwaris' => $id_ahliwaris);
        $this->M_Ahliwaris->hapus_data($where, 'ahliwaris');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('/ahliwaris');
    }

    function edit($id_ahliwaris)
    {
        $where = array('id_ahliwaris' => $id_ahliwaris);
        $data['ahliwaris'] = $this->M_Ahliwaris->edit_data($where, 'ahliwaris')->row();
        $this->load->view('ahliwaris/edit', $data);
    }

    public function update()
    {

        $id_makam = $this->input->post('id_makam');
        $alamat_ahliwaris = $this->input->post('alamat_ahliwaris');
        $nik_ahliwaris = $this->input->post('nik_ahliwaris');

        $data = array(

            'id_makam' => $id_makam,
            'alamat_ahliwaris' => $alamat_ahliwaris,
            'nik_ahliwaris' => $nik_ahliwaris,
        );

        $where = array(
            'id_ahliwaris' => $id_ahliwaris
        );

        $this->M_Ahliwaris->update_data($where, $data, 'ahliwaris');
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('/ahliwaris');
    }
}
