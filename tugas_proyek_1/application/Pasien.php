<?php

class Pasien {
    private $kode;
    private $nama;
    private $tmp_lahir;
    private $tgl_lahir;
    private $email;
    private $gender;

    function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getData($specific_data = '')
    {
        if (!empty($specific_data)) {
            return $this->$specific_data;
        } else {
            return [
                'kode' => $this->kode,
                'nama' => $this->nama,
                'tmp_lahir' => $this->tmp_lahir,
                'tgl_lahir' => $this->tgl_lahir,
                'email' => $this->email,
                'gender' => $this->gender
            ];
        }
    }
}