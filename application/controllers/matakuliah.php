<?php
class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matkul');
    }

    public function cetak()
    {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];

        $this->load->view('view-data-matkul', $data);
    }
}