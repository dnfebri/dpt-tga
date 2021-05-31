<?php

namespace App\Http\Livewire\Pemilih;

use App\Models\Pemilih;
use Livewire\Component;

class Index extends Component
{
    public $searchName;
    protected $queryString = ['searchName'];

    public function tampil()
    {
        // dump($this->searchName);
        if ($this->searchName === NULL) {
            $pemilih = Pemilih::all();
        } else {
            $pemilih = Pemilih::where('nama', 'like', '%' . $this->searchName . '%')->get();
        }
        return view('livewire.pemilih.index', compact('pemilih'));
    }

    public function render()
    {
        return $this->tampil();
    }
}
