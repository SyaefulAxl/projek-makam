<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BiayaPemakamanModel extends CI_Model{

    private $_table = "biaya_pemakaman";

    public $kode_biaya;
    public $id_makam;
    public $biaya;

    public function getAll()
    {
        $query = $this->db->get($this->_table, 10);
        return $query->result();
    }
}