<?php

$arrMhs = [
    [
        "nim" => "607012400121",
        "namalengkap" => "Noval",
        "jeniskelamin" => "L",
        "programstudi" => "SI",
        "alamat" => "Jl. Raya No. 1",
    ],
    [
        "nim" => "607012400122",
        "namalengkap" => "Rizky",
        "jeniskelamin" => "L",
        "programstudi" => "SIA",
        "alamat" => "Jl. Raya No. 2",
    ],
];

function addMhs($nim, $namalengkap, $jeniskelamin, $programstudi, $alamat)
{
    return [
        "nim" => $nim,
        "namalengkap" => $namalengkap,
        "jeniskelamin" => $jeniskelamin,
        "programstudi" => $programstudi,
        "alamat" => $alamat,
    ];
}
