<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "tbl_karyawan";

    public $nip;
    public $nama;
    public $jenis_kelamin;
    public $tgl_lahir;
    public $telp;
    public $email;
    public $alamat;
    public $jabatan;
    public $masa_kerja;

    public function rules()
    {
        return [
		 	['field' => 'nip',
            'label' => 'NIP',
            'rules' => 'required|numeric'],
			
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'Tanggal lahir',
            'rules' => 'required'],

            ['field' => 'telp',
            'label' => 'Telepon',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'required'],
           
            ['field' => 'masa_kerja',
            'label' => 'Masa Kerja',
            'rules' => 'required'],
           ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($nip)
    {
        return $this->db->get_where($this->_table, ["nip" => $nip])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nip =  $post["nip"];
        $this->nama = $post["nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->telp =  $post["telp"];
        $this->email = $post["email"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->masa_kerja = $post["masa_kerja"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nip =  $post["nip"];
        $this->nama = $post["nama"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->telp =  $post["telp"];
        $this->email = $post["email"];
        $this->alamat = $post["alamat"];
        $this->jabatan = $post["jabatan"];
        $this->masa_kerja = $post["masa_kerja"];
        return $this->db->update($this->_table, $this, array('nip' => $post['nip']));
    }

    public function delete($nip)
    {
        return $this->db->delete($this->_table, array("nip" => $nip));
    }
}