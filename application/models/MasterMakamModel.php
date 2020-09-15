<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MasterMakamModel extends CI_Model{

    private $_table = "master_makam";

    public $id_makam;
    public $no_makam;
    public $kode_blok;
    public $lokas;

    public function getAll()
    {
        $query = $this->db->get($this->_table, 10);
        return $query->result();
    }
}