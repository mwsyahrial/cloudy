<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("aturan_gaji_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["aturan"] = $this->aturan_gaji_model->getAll();
        $this->load->view("admin/aturan/list", $data);
    }

    public function add()
    {
        $aturan = $this->aturan_gaji_model;
        $validation = $this->form_validation;
        $validation->set_rules($aturan->rules());

        if ($validation->run()) {
            $aturan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/aturan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/aturan');
       
        $aturan = $this->aturan_gaji_model;
        $validation = $this->form_validation;
        $validation->set_rules($aturan->rules());

        if ($validation->run()) {
            $aturan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["aturan"] = $aturan->getById($id);
        if (!$data["aturan"]) show_404();
        
        $this->load->view("admin/aturan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->aturan_gaji_model->delete($id)) {
            redirect(site_url('admin/aturan'));
        }
    }
}