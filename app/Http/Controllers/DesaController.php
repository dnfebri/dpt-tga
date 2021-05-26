<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class DesaController extends Controller
{
    public function __construct()
    {
        // // TAMBAHAKAN INI JIKA MENGGUNAKAN ROUTE::RESOURCE
        //     $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desa = Desa::all();
        // dump($desa);
        return view('desa.index', compact('desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'nama_desa' => 'required',
                'jml_tps' => ['required', 'numeric']
            ],
            [
                'nama_desa.required' => 'Nama Desa Harus diisi!',
                'jml_tps.required' => 'Jumlah Tps Harus diisi!',
                'jml_tps.numeric' => 'Harus diisi dengan angka!'
            ]
        );


        Desa::create($request->all());

        return redirect()->route('desa.index')->with('massage', 'Desa ' . $request->nama_desa . ' berhasi ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit(Desa $desa)
    {
        return view('desa.edit', compact('desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desa $desa)
    {
        // Validation
        $request->validate(
            [
                'nama_desa' => 'required',
                'jml_tps' => ['required', 'numeric']
            ],
            [
                'nama_desa.required' => 'Nama Desa Harus diisi!',
                'jml_tps.required' => 'Jumlah Tps Harus diisi!',
                'jml_tps.numeric' => 'Harus diisi dengan angka!'
            ]
        );

        Desa::where('id', $desa->id)
            ->update([
                'nama_desa' => $request->nama_desa,
                'jml_tps' => $request->jml_tps
            ]);

        return redirect()->route('desa.index')->with('massage', 'Desa ' . $desa->nama_desa . ' berhasi Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desa $desa)
    {
        Desa::destroy($desa->id);

        return redirect()->route('desa.index')->with('massage', 'Desa ' . $desa->nama_desa . ' berhasi Dihapus');

        // dump($desa);
    }
}
