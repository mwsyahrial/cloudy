<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["karyawan"] = $this->karyawan_model->getAll();
        $this->load->view("admin/karyawan/list", $data);
    }

    public function add()
    {
        $karyawn = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawn->rules());

        if ($validation->run()) {
            $karyawn->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/karyawan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/karyawan');
       
        $karyawn = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawn->rules());

        if ($validation->run()) {
            $karyawn->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["karyawn"] = $karyawn->getById($id);
        if (!$data["karyawn"]) show_404();
        
        $this->load->view("admin/karyawan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->karyawan_model->delete($id)) {
            redirect(site_url('admin/karyawan'));
        }
    }
}