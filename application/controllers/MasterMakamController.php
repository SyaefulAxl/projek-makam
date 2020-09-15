<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterMakamController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MasterMakamModel");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["makam"] = $this->MasterMakamModel->getAll();
        //print_r($data);
       $this->load->view('master_makam/list', $data);
    }
}