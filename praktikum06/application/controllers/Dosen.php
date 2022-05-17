<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dosen1');
        $this->dosen1->id = 1;
        $this->dosen1->nama = 'Sirojul Munir, S.Si, M.Kom';
        $this->dosen1->nidn = '0414047101';
        $this->dosen1->gender = 'Laki-laki';
        $this->dosen1->tmp_lahir = 'Purwakarta';
        $this->dosen1->tgl_lahir = '10-02-1973';
        $this->dosen1->pendidikan = 'S2 Teknik Informatika';

        $this->load->model('dosen_model', 'dosen2');
        $this->dosen2->id = 2;
        $this->dosen2->nama = 'Ahmad Rio Adriansyah, S.Si. M.Si.';
        $this->dosen2->nidn = '0413128601';
        $this->dosen2->gender = 'Laki-laki';
        $this->dosen2->tmp_lahir = 'Bandung';
        $this->dosen2->tgl_lahir = '12-02-1987';
        $this->dosen2->pendidikan = 'S2 Sains Komputasi';

        $this->load->model('dosen_model', 'dosen3');
        $this->dosen3->id = 2;
        $this->dosen3->nama = 'TIFANI NABARIAN, S.Kom, M.T.i';
        $this->dosen3->nidn = '420089004';
        $this->dosen3->gender = 'Laki-laki';
        $this->dosen3->tmp_lahir = 'Subang';
        $this->dosen3->tgl_lahir = '12-02-1990';
        $this->dosen3->pendidikan = 'S2 Teknik Informatika';

        $all_dosen = [$this->dosen1, $this->dosen2, $this->dosen3];
        $data['all_dosen'] = $all_dosen;

        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }
}