<?php

class Bmi {
    private $berat;
    private $tinggi;

    function __construct($berat, $tinggi)
    {
        $this->berat = floatval(str_replace(',', '.', $berat));
        $this->tinggi = floatval(str_replace(',', '.', $tinggi));
    }

    public function nilaiBMI()
    {
        return round($this->berat / (($this->tinggi / 100) * ($this->tinggi / 100)), 1);
    }

    public function statusBMI()
    {
        $nilaiBMI = $this->nilaiBMI();
        if ($nilaiBMI < 18.5) {
            return 'Kekurangan berat badan';
        } else if ($nilaiBMI < 24.9) {
            return 'Normal (ideal)';
        } else if ($nilaiBMI < 29.9) {
            return 'Kelebihan berat badan';
        } else {
            return 'Kegemukan (Obesitas)';
        }
    }

    public function getData($specific_data = '')
    {
        if (!empty($specific_data)) {
            return $this->$specific_data;
        } else {
            return [
                'berat' => $this->berat,
                'tinggi' => $this->tinggi
            ];
        }
    }

    public function updateData($key, $new_value)
    {
        $this->$key = $new_value;
    }
}