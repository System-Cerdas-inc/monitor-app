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
        $validasis = Validasi::with('site')->get();

        // tampilkan data site yg blm dan sudah divalidasi dengan cek relasi validasi
        $validasis = $sites->map(function ($site) use ($validasis) {
            $site->detail_validasi = $validasis->where('site_id', $site->id)->first();
            return $site;
        });

        // return $validasis;
        $doneValidasis = Site::whereHas('validasi', function ($query) {
            $query->where('status_validasi', 'Sudah Validasi');
        })->count();
        $processValidasis = $validasis->where('status_validasi', 'Proses Validasi')->count();
        $notValidasis = $sites->count() - $doneValidasis;

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
    public function create($id)
    {
        $site = Site::with('validasi')->find($id);
        $validasis = Validasi::all();
        $status =
            ['Aktif', 'Suspend', 'Tidak Aktif'];
        $status_validasi =
            ['Sudah Validasi', 'Proses Validasi', 'Belum Validasi'];
        return view('validasi.inputvalidasi', compact('site', 'validasis', 'status', 'status_validasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());
        $validateData = $request->validate(
            [
                'site_id' => 'required|unique:validasis,site_id',
                'status' => 'required',
                'status_validasi' => 'required',
                'catatan' => 'required',
            ],
        );
        if ($validateData) {
            Validasi::updateOrCreate(
                ['site_id' => $id],
                [
                    'site_id' => $id,
                    'status' => $request->status,
                    'status_validasi' => $request->status_validasi,
                    'catatan' => $request->catatan,
                ]
            );
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
        $validasis = Validasi::find($id);
        $sites = Site::all();
        $status =
            ['Aktif', 'Suspend', 'Tidak Aktif'];
        $status_validasi =
            ['Sudah Validasi', 'Proses Validasi', 'Belum Validasi'];
        return view('validasi.editvalidasi', compact('validasis', 'sites', 'status', 'status_validasi'));
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
