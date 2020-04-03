<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan_gaji_model extends CI_Model
{
    private $_table = "tbl_aturan_gaji";

    public $kode;
    public $jabatan;
    public $masa_kerja;
    public $insentif;
    public $bonus;

    public function rules()
    {
        return [
		 	['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required|numeric'],
			
            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],

            ['field' => 'masa_kerja',
            'label' => 'Masa Kerja',
            'rules' => 'required|numeric'],

            ['field' => 'insentif',
            'label' => 'Insentif',
            'rules' => 'required|numeric'],

            ['field' => 'bonus',
            'label' => 'Bonus',
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
        $this->jabatan = $post["jabatan"];
        $this->masa_kerja = $post["masa_kerja"];
        $this->insentif = $post["insentif"];
        $this->bonus = $post["bonus"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kode =  $post["kode"];
        $this->jabatan = $post["jabatan"];
        $this->masa_kerja = $post["masa_kerja"];
        $this->insentif = $post["insentif"];
        $this->bonus = $post["bonus"];
        return $this->db->update($this->_table, $this, array('kode' => $post['kode']));
    }

    public function delete($kode)
    {
        return $this->db->delete($this->_table, array("kode" => $kode));
    }
}