<?php

class Bmipasien {
    private $tanggal;
    private $bmi;
    private $pasien;

    function __construct(Pasien $pasien, Bmi $bmi)
    {
        date_default_timezone_set("Asia/Jakarta");
        $this->tanggal = date('Y-m-d');
        $this->pasien = $pasien;
        $this->bmi = $bmi;
    }

    public function getData($specific_data = '')
    {
        if (!empty($specific_data)) {
            return $this->$specific_data;
        } else {
            return [
                'tanggal' => $this->tanggal,
                'pasien' => $this->pasien->getData(),
                'bmi' => ['berat' => $this->bmi->getData('berat'), 'tinggi' => $this->bmi->getData('tinggi') , 'nilai' => $this->bmi->nilaiBMI(), 'status' => $this->bmi->statusBMI()]
            ];
        }
    }
}