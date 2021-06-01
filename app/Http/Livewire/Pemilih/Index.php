<?php

namespace App\Http\Livewire\Pemilih;

use App\Models\Pemilih;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public $searchName;
    protected $queryString = ['searchName'];

    public function tampil()
    {
        // dump($this->searchName);
        if ($this->searchName === NULL) {
            $pemilih = Pemilih::paginate(8);
        } else {
            $pemilih = Pemilih::where('nama', 'like', '%' . $this->searchName . '%')->paginate(8);
        }
        return view('livewire.pemilih.index', compact('pemilih'));
    }

    public function render()
    {
        return $this->tampil();
    }
}
