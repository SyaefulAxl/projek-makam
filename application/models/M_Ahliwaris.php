<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Ahliwaris extends CI_Model
{

  private $_table = "ahliwaris";

  public $id_makam;
  public $alamat_makam;
  public $nik_ahliwaris;

  public function getAll()
  {
    $query = $this->db->get($this->_table, 10);
    return $query->result();
  }

  public function tambahDataAhliwaris()
  {
    $data = [
      "id_ahliwaris" => $this->input->post('id_ahliwaris', true),
      "id_makam" => $this->input->post('id_makam', true),
      "alamat_ahliwaris" => $this->input->post('alamat_ahliwaris', true),
      "nik_ahliwaris" => $this->input->post('nik_ahliwaris', true),
    ];

    $this->db->insert('ahliwaris', $data);
  }

  function tampil_data()
  {
    return $this->db->get('ahliwaris');
  }

  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function cariDataAhliwaris()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('id_makam', $keyword);
    return $this->db->get('ahliwaris')->result_array();
  }
}
