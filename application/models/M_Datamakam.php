<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Datamakam extends CI_Model
{

  private $_table = "pemakaman";

  public $id_makam;
  public $no_makam;
  public $kode_blok;
  public $lokas;

  public function getAll()
  {
    $query = $this->db->get($this->_table, 10);
    return $query->result();
  }

  public function tambahDataPemakaman()
  {
    $data = [
      "id_makam" => $this->input->post('id_makam', true),
      "no_register" => $this->input->post('no_register', true),
      "nama_mendiang" => $this->input->post('nama_mendiang', true),
      "tgl_pemakaman" => $this->input->post('tgl_pemakaman', true),
      "biaya_pemakaman" => $this->input->post('biaya_pemakaman', true),
      "status" => $this->input->post('status', true),
      "no_makam" => $this->input->post('no_makam', true),
      "jatuh_tempo" => $this->input->post('jatuh_tempo', true),
      "nik_mendiang" => $this->input->post('nik_mendiang', true)
    ];

    $this->db->insert('pemakaman', $data);
  }

  function tampil_data()
  {
    return $this->db->get('pemakaman');
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

  function cariDataPemakaman()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('no_register', $keyword);
    return $this->db->get('pemakaman')->result_array();
  }
}
