<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jabatan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jabatan"] = $this->jabatan_model->getAll();
        $this->load->view("admin/jabatan/list", $data);
    }

    public function add()
    {
        $jabat = $this->jabatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jabat->rules());

        if ($validation->run()) {
            $jabat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/jabatan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jabatan');
       
        $jabat = $this->jabatan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jabat->rules());

        if ($validation->run()) {
            $jabat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jabat"] = $jabat->getById($id);
        if (!$data["jabat"]) show_404();
        
        $this->load->view("admin/jabatan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->jabatan_model->delete($id)) {
            redirect(site_url('admin/jabatan'));
        }
    }
}