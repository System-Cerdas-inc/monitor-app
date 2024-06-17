<?php

namespace App\Http\Controllers;

use App\Models\site;
use App\Models\validasi;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ValidasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        $validasis = Validasi::all();

        $doneValidasis = $validasis->where('status_validasi', 'Sudah Validasi')->count();
        $processValidasis = $validasis->where('status_validasi', 'Proses Validasi')->count();
        $notValidasis = $validasis->where('status_validasi', 'Belum Validasi')->count();

        $statistics = [
            'sudah' => $doneValidasis,
            'proses' => $processValidasis,
            'belum' => $notValidasis,
        ];
        // return ['sites' => $sites, 'validasis' => $validasis, 'statistics' => $statistics];
        return view('validasi.index', compact('sites', 'validasis', 'statistics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        $validasis = Validasi::all();
        $status =
            ['Aktif', 'Suspend', 'Tidak Aktif'];
        $status_validasi =
            ['Sudah Validasi', 'Proses Validasi', 'Belum Validasi'];
        return view('validasi.inputvalidasi', compact('sites', 'validasis', 'status', 'status_validasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate(
            [
                'site_id' => 'required|unique:sites,domain',
                'status' => 'required',
                'status_validasi' => 'required',
                'catatan' => 'required',
            ],
        );
        if ($validateData) {
            Validasi::create($request->all());
            return redirect()->route('listvalidasi')->with('success', 'Berhasil Melakukan Validasi');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function show(validasi $validasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $validasis = Validasi::all();
        // $site = Site::find($id);
        // $status =
        //     ['Aktif', 'Suspend', 'Tidak Aktif'];
        // $status_validasi =
        //     ['Sudah Validasi', 'Proses Validasi', 'Belum Validasi'];
        // return view('validasi.editvalidasi', compact('validasis', 'site', 'status', 'status_validasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, validasi $validasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\validasi  $validasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
