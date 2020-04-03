<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("gaji_model");
        $this->load->model("karyawan_model");
        $this->load->model("jabatan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["gaji"] = $this->gaji_model->getAll();
        $this->load->view("admin/gaji/list", $data);
    }

    public function add()
    {
        $gaji = $this->gaji_model;
        $karyawan = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($gaji->rules());

        if ($validation->run()) {
            $gaji->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["karyawan"] = $this->karyawan_model->getAll();
        if (!$data["karyawan"]) show_404();

        $this->load->view("admin/gaji/new_form", $data);
    }


     public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/gaji');
       
        $gaji = $this->gaji_model;
        $validation = $this->form_validation;
        $validation->set_rules($aturan->rules());

        if ($validation->run()) {
            $gaji->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["gaji"] = $gaji->getById($id);
        if (!$data["gaji"]) show_404();
        
        $this->load->view("admin/gaji/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->gaji_model->delete($id)) {
            redirect(site_url('admin/gaji'));
        }
    }

    public function gaji()
    {
        $gaji = $this->gaji_model;
        $validation = $this->form_validation;
        $validation->set_rules($gaji->rules());

        if ($validation->run()) {
            $gaji->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
           
        $this->load->view("admin/gaji/penggajian");
    }

    

}