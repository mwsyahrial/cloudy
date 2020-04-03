<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_model extends CI_Model
{
    private $_table = "tbl_gaji";

    public $kode_gaji;
    public $nip;
    public $nama_karyawan;
    public $tgl_terima;
    public $nominal;

    public function rules()
    {
        return [
		 	['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required|numeric'],
			
            ['field' => 'nip',
            'label' => 'NIP',
            'rules' => 'required'],

            ['field' => 'nama_karyawan',
            'label' => 'Nama Karyawan',
            'rules' => 'required'],

            ['field' => 'tgl_terima',
            'label' => 'Tanggal Terima',
            'rules' => 'required'],

            ['field' => 'nominal',
            'label' => 'Nominal',
            'rules' => 'required|numeric'],
           ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($kode)
    {
        return $this->db->get_where($this->_table, ["kode" => $kode])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode =  $post["kode"];
        $this->nip = $post["nip"];
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->tgl_terima = $post["tgl_terima"];
        $this->nominal = $post["nominal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode =  $post["kode"];
        $this->nip = $post["nip"];
        $this->nama_karyawan = $post["nama_karyawan"];
        $this->tgl_terima = $post["tgl_terima"];
        $this->nominal = $post["nominal"];
        return $this->db->update($this->_table, $this, array('kode' => $post['kode']));
    }

    public function delete($kode)
    {
        return $this->db->delete($this->_table, array("kode" => $kode));
    }
}