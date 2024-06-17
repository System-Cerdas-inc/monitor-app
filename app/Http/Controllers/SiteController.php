<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\site;
use App\Models\Uptd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sites = Site::all();
        $opds = Opd::all();
        $uptds = Uptd::all();
        return view ('sites.index', compact('sites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_layanan =
            ['Layanan Publik', 'Layanan Tata Kelola Pemerintahan'];
        $jenis_aset =
            ['Aplikasi', 'Website'];
        $lokasi_server =
            ['Diskominfo', 'Diluar'];
        $sumber_dana =
            ['APBD','Non-APBD'];
        $tahun =
            ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030'];
        $opds = Opd::all();
        $sites = Site::all();
        
        return view('sites.inputsite', compact('opds', 'sites', 'jenis_layanan', 'jenis_aset', 'lokasi_server', 'sumber_dana', 'tahun'));
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
                'opd_id' => 'required',
                'domain' => 'required|unique:sites,domain',
                'jenis_layanan' => 'required',
                'jenis_aset' => 'required',
                'lokasi_server' => 'required',
                'tahun' => 'required',
                'sumber_dana' => 'required',
                'nilai' => 'required',
                'deskripsi' => 'required',
                'kak' => 'required|file|mimes:pdf|max:2048',
                'probis' => 'required|file|mimes:pdf|max:2048',
                'manual_book' => 'required|file|mimes:pdf|max:2048'
            ],
        );
        if ($validateData) {
            //untuk kak, probis, manual_book simpan ke storage
            if ($request->hasFile('kak')) {
                $file = $request->file('kak');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/kak'), $filename);
                $file_kak = $filename;
            }
            if ($request->hasFile('probis')) {
                $file = $request->file('probis');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/probis'), $filename);
                $file_probis = $filename;
            }
            if ($request->hasFile('manual_book')) {
                $file = $request->file('manual_book');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/manual_book'), $filename);
                $file_manual_book = $filename;
            }

            Site::create([
                'opd_id' => $request->opd_id,
                'domain' => $request->domain,
                'jenis_layanan' => $request->jenis_layanan,
                'jenis_aset' => $request->jenis_aset,
                'lokasi_server' => $request->lokasi_server,
                'tahun' => $request->tahun,
                'sumber_dana' => $request->sumber_dana,
                'nilai' => $request->nilai,
                'deskripsi' => $request->deskripsi,
                'kak' => $file_kak,
                'probis' => $file_probis,
                'manual_book' => $file_manual_book
            ]);
            return redirect()->route('listsites')->with('success', 'Berhasil Menambahkan Data!');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function show(site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $site = Site::find($id);
        $opds = Opd::all();
        $uptds = Uptd::all();
        $jenis_layanan =
            ['Layanan Publik', 'Layanan Tata Kelola Pemerintahan'];
        $jenis_aset =
            ['Aplikasi', 'Website'];
        $lokasi_server =
            ['Diskominfo', 'Diluar'];
        $sumber_dana =
            ['APBD','Non-APBD'];
        $tahun =
            ['2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026', '2027', '2028', '2029', '2030'];
        return view('sites.editsite', compact('site', 'opds', 'uptds', 'jenis_layanan', 'jenis_aset', 'lokasi_server', 'sumber_dana', 'tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sites = Site::find($id);
        $rule = [
            'opd_id' => 'required',
            'domain' => 'required|unique:sites,domain',
            'jenis_layanan' => 'required',
            'jenis_aset' => 'required',
            'lokasi_server' => 'required',
            'tahun' => 'required',
            'sumber_dana' => 'required',
            'nilai' => 'required',
            'deskripsi' => 'required',
            'kak' => 'nullable|file|mimes:pdf|max:2048',
            'probis' => 'nullable|file|mimes:pdf|max:2048',
            'manual_book' => 'nullable|file|mimes:pdf|max:2048',
        ];
        if($sites->opd_id == $request->opd_id){
            $rule['opd_id'] = 'required';
        }
        if($sites->domain == $request->domain){
            $rule['domain'] = 'required';
        }
        if($sites->jenis_layanan == $request->jenis_layanan){
            $rule['jenis_layanan'] = 'required';
        } 
        if($sites->jenis_aset == $request->jenis_aset){
            $rule['jenis_aset'] = 'required';
        }
        if($sites->lokasi_server == $request->lokasi_server){
            $rule['lokasi_server'] = 'required';
        }
        if($sites->tahun == $request->tahun){
            $rule['tahun'] = 'required';
        }
        if($sites->sumber_dana == $request->sumber_dana){
            $rule['sumber_dana'] = 'required';
        }
        if($sites->nilai == $request->nilai){
            $rule['nilai'] = 'required';
        }
        if($sites->deskripsi == $request->deskripsi){
            $rule['deskripsi'] = 'required';
        }

        $validatedData = $request->validate(
            $rule
        );
        if ($validatedData) {
            //untuk kak, probis, manual_book simpan ke storage
            if ($request->hasFile('kak')) {
                $file = $request->file('kak');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/kak'), $filename);
                $file_kak = $filename;
            }

            if ($request->hasFile('probis')) {
                $file = $request->file('probis');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/probis'), $filename);
                $file_probis = $filename;
            }

            if ($request->hasFile('manual_book')) {
                $file = $request->file('manual_book');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('storage/manual_book'), $filename);
                $file_manual_book = $filename;
            }

            $sites->update([
                'opd_id' => $request->opd_id,
                'domain' => $request->domain,
                'jenis_layanan' => $request->jenis_layanan,
                'jenis_aset' => $request->jenis_aset,
                'lokasi_server' => $request->lokasi_server,
                'tahun' => $request->tahun,
                'sumber_dana' => $request->sumber_dana,
                'nilai' => $request->nilai,
                'deskripsi' => $request->deskripsi,
                'kak' => $sites->kak ? $sites->kak : $file_kak,
                'probis' => $sites->probis ? $sites->probis : $file_probis,
                'manual_book' => $sites->manual_book ? $sites->manual_book : $file_manual_book
            ]);
            return redirect()->route('listsites')->with('success', 'Berhasil Mengubah Data!');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Site::find($id)->delete();
        return redirect()->route('listsites')->with('success', 'Berhasil Menghapus Data!');
    }

    public function getsite(Request $request)
    {
        $sites = Site::all();
    }

    public function getSiteById($id)
    {
        $sites = Site::find($id);
        return response()->json($sites);
    }
}
