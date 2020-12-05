<?php

namespace App\Imports;

use App\Models\siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new siswa([
            //
            'id' => $row[0],
            'nama' => $row[1],
            'sku' => $row[2],
            'harga_modal' => $row[3],
            'harga_jual' => $row[4],
            
        ]);
    }
}
