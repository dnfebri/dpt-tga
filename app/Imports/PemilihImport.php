<?php

namespace App\Imports;

use App\Models\Pemilih;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class PemilihImport implements ToModel, WithHeadingRow, WithValidation
{
    private $rows = 0;

    // Validasi Colum Fill Excel
    public function rules(): array
    {
        return ([
            'nik' => 'required',
            'nokk' => 'required',
            'nama' => 'required',
            'tempatlahir' => 'required',
            'tanggallahir' => 'required',
            'statuskawin' => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kd_tps' => 'required',
            'kd_desa' => 'required'
        ]);
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dump($row);
        $this->rows++;
        return new Pemilih([
            'nik' => $row['nik'],
            'no_kk' => $row['nokk'],
            'nama' => $row['nama'],
            'tmp_lahir' => $row['tempatlahir'],
            'tgl_lahir' => $row['tanggallahir'],
            'status_kawin' => $row['statuskawin'],
            'jenis_kelamin' => $row['jeniskelamin'],
            'alamat' => $row['jalandukuh'] . ' ' . $row['rt'] . '/' . $row['rw'],
            'kd_tps' => $row['kd_tps'],
            'kd_desa' => $row['kd_desa']
        ]);
    }

    public function getRowCount(): int
    {
        return $this->rows;
    }
}
