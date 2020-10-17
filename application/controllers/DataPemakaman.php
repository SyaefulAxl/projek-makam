<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPemakaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Datamakam");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pemakaman"] = $this->M_Datamakam->getAll();
        if ($this->input->post('keyword')) {
            $data['pemakaman'] = $this->M_Datamakam->cariDataPemakaman();
        }
        //print_r($data);
        $this->load->view('datapemakaman/index', $data);
    }

    public function Tambah()
    {
        $this->load->library('form_validation');

        //$this->form_validation->set_rules('id_makam', 'register', 'required|numeric');
        $this->form_validation->set_rules('no_register', 'register', 'required|numeric');
        $this->form_validation->set_rules('nama_mendiang', 'nama mendiang', 'required');
        $this->form_validation->set_rules('tgl_pemakaman', 'tanggal pemakaman', 'required');
        $this->form_validation->set_rules('biaya_pemakaman', 'Biaya', 'required|numeric');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('no_makam', 'no makam', 'required|numeric');
        $this->form_validation->set_rules('jatuh_tempo', 'jatuh tempo', 'required');
        $this->form_validation->set_rules('nik_mendiang', 'nik mendiang', 'required|numeric');



        if ($this->form_validation->run() == FALSE) {


            $this->load->view('datapemakaman/tambah');
        } else {
            $this->M_Datamakam->tambahDataPemakaman();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('/');
        }
    }


    function detail($id_makam)
    {

        $where = array('id_makam' => $id_makam);
        $data['pemakaman'] = $this->M_Datamakam->edit_data($where, 'pemakaman')->row();
        $this->load->view('datapemakaman/detail', $data);
    }

    function hapus($id_makam)
    {
        $where = array('id_makam' => $id_makam);
        $this->M_Datamakam->hapus_data($where, 'pemakaman');
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('/');
    }

    function edit($id_makam)
    {
        $where = array('id_makam' => $id_makam);
        $data['pemakaman'] = $this->M_Datamakam->edit_data($where, 'pemakaman')->row();
        $this->load->view('datapemakaman/edit', $data);
    }

    public function update()
    {

        $id_makam = $this->input->post('id_makam');
        $no_register = $this->input->post('no_register');
        $nama_mendiang = $this->input->post('nama_mendiang');
        $tgl_pemakaman = $this->input->post('tgl_pemakaman');
        $biaya_pemakaman = $this->input->post('biaya_pemakaman');
        $status = $this->input->post('status');
        $no_makam = $this->input->post('no_makam');
        $jatuh_tempo = $this->input->post('jatuh_tempo');
        $nik_mendiang = $this->input->post('nik_mendiang');

        $data = array(

            'no_register' => $no_register,
            'nama_mendiang' => $nama_mendiang,
            'tgl_pemakaman' => $tgl_pemakaman,
            'biaya_pemakaman' => $biaya_pemakaman,
            'status' => $status,
            'no_makam' => $no_makam,
            'jatuh_tempo' => $jatuh_tempo,
            'nik_mendiang' => $nik_mendiang
        );

        $where = array(
            'id_makam' => $id_makam
        );

        $this->M_Datamakam->update_data($where, $data, 'pemakaman');
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('/');
    }
}
