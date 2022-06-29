<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Rizal';
        $this->dsn1->nidn = '001';
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'BAndung';
        $this->dsn1->tgl_lahir = '19-09-1987';
        $this->dsn1->pendidikan = 'S1 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Mawar';
        $this->dsn2->nidn = '002';
        $this->dsn2->gender = 'Perempuan';
        $this->dsn2->tmp_lahir = 'Depok';
        $this->dsn2->tgl_lahir = '25-07-1988';
        $this->dsn2->pendidikan = 'S1 Sistem Informasi';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 3;
        $this->dsn3->nama = 'Iskandar';
        $this->dsn3->nidn = '003';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Bogor';
        $this->dsn3->tgl_lahir = '15-03-1995';
        $this->dsn3->pendidikan = 'S1 Teknik Informatika';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['all_dosen'] = $all_dosen;
        $this->load->view('dosen/index', $data);
    }
}
