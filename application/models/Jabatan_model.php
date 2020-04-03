<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    private $_table = "tbl_jabatan";

    public $kode;
    public $jabatan;
    public $standar_gaji;
    public $keterangan;

    public function rules()
    {
        return [
		 	['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required|numeric'],
			
            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'standar_gaji',
            'label' => 'Standar Gaji',
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

    public function getByJab($jabatan)
    {
        return $this->db->get_where($this->_table, ["jabatan" => $jabatan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kode =  $post["kode"];
        $this->jabatan = $post["jabatan"];
        $this->standar_gaji = $post["standar_gaji"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode = $post["kode"];
        $this->jabatan = $post["jabatan"];
        $this->standar_gaji = $post["standar_gaji"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('kode' => $post['kode']));
    }

    public function delete($kode)
    {
        return $this->db->delete($this->_table, array("kode" => $kode));
    }
}