<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->model('matakuliah_model', 'mk1');
        $this->mk1->id = 1;
        $this->mk1->nama = 'Jaringan Komputer';
        $this->mk1->sks = 4;
        $this->mk1->kode = 'Jarkom';

        $this->load->model('matakuliah_model', 'mk2');
        $this->mk2->id = 2;
        $this->mk2->nama = 'Bahasa Inggris';
        $this->mk2->sks = 2;
        $this->mk2->kode = 'BIng';

        $this->load->model('matakuliah_model', 'mk3');
        $this->mk3->id = 2;
        $this->mk3->nama = 'Pancasila dan Pendidikan Kewarganegaraan';
        $this->mk3->sks = 2;
        $this->mk3->kode = 'PPKN';

        $all_mk = [$this->mk1, $this->mk2, $this->mk3];
        $data['all_mk'] = $all_mk;
        $this->load->view('matakuliah/index', $data);
    }
}
