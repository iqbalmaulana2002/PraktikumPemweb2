<?php

function kelulusan($_nilai)
{
    if ($_nilai > 55) {
        return '<span class="badge bg-success">LULUS</span>';
    } else {
        return '<span class="badge bg-danger">TIDAK LULUS</span>';
    }
}

function grade($_nilai)
{
    if ($_nilai >= 85 && $_nilai <= 100) {
        $grade = 'A';
    } elseif ($_nilai <= 84 && $_nilai >= 70) {
        $grade = 'B';
    } elseif ($_nilai <= 69 && $_nilai >= 56) {
        $grade = 'C';
    } elseif ($_nilai <= 55 && $_nilai >= 36) {
        $grade = 'D';
    } elseif ($_nilai <= 35 && $_nilai >= 0) {
        $grade = 'E';
    } else {
        $grade = 'I';
    }

    return $grade;
}

function predikat($_grade)
{
    switch ($_grade) {
        case 'A':
            $predikat = 'Sangat Memuaskan';
            break;
        case 'B':
            $predikat = 'Memuaskan';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        case 'E':
            $predikat = 'Sangat Kurang';
            break;
        default:
            $predikat = 'Tidak Ada';
            break;
    }

    return $predikat;
}