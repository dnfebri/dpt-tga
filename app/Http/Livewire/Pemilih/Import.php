<?php

namespace App\Http\Livewire\Pemilih;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Imports\PemilihImport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\Request;

class Import extends Component
{

    use WithFileUploads;
    public $file;

    public function save()
    {
        $this->validate(
            [
                'file' => ['required', 'mimes:xlsx,xls']
            ],
            [
                'file.required' => 'Pilih File Terlebih Dahulu!',
                'file.mimes' => 'yang anda upload tidak mendukung format Excel!'
            ]
        );

        $import = new PemilihImport;

        Excel::import($import, $this->file);  // File exsecution laravelExcel
        // dd('JML Row ' . $import->getRowCount());

        session()->flash('massage', $import->getRowCount() . ' Data dalam Excel berhasil di tambahkan');
        $this->file = '';
    }

    public function render()
    {
        return view('livewire.pemilih.import');
    }
}
