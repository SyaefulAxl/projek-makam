<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BiayaPemakamanController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("BiayaPemakamanModel");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["biaya"] = $this->BiayaPemakamanModel->getAll();
        //print_r($data);
       $this->load->view('biaya_pemakaman/index', $data);
    }
}