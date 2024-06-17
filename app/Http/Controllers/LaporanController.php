<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $site = Site::select('id', 'domain')->get();

        return view('laporan.index', compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate(
            [
                'tgl_monitor_start' => 'required',
                'tgl_monitor_end' => 'required',
            ],
            [
                'tgl_monitor_start.required' => 'Harap Pilih Tanggal Awal',
                'tgl_monitor_end.required' => 'Harap Pilih Tanggal Akhir'
            ]
        );
        // if ($validatedData) {
            $laporan = DB::table('monitorings')
                ->join('sites','monitorings.site_id', '=','sites.id')    
                ->leftJoin('opds','sites.opd_id', '=', 'opds.id')
                ->leftJoin('uptds', 'sites.uptd_id', '=', 'uptds.id')
                ->select(
                    'sites.id', 
                    'sites.domain',
                    'opds.nama_opd',
                    'uptds.nama_uptd',
                    'sites.jenis',
                    'sites.lokasi_server',
                    'sites.sumber_dana',
                    'sites.tahun',
                    DB::raw('monitorings.date as tgl_monitoring'),
                    'monitorings.kondisi',
                    // DB::raw('SUM(CASE WHEN monitorings.kondisi = "normal" THEN 1 ELSE 0 END) as normal'), 
                    // DB::raw('SUM(CASE WHEN monitorings.kondisi = "error" THEN 1 ELSE 0 END) as error'),
                    'sites.status',
                )
                ->when($request->jenis, function ($query, $jenis) {
                    return $query->where('sites.jenis', $jenis);
                })
                ->when($request->domain, function ($query, $domain) {
                    return $query->where('sites.id', $domain);
                })
                ->when($request->lokasi_server, function ($query, $lokasi_server) {
                    return $query->where('sites.lokasi_server', $lokasi_server);
                })
                ->when($request->sumber_dana, function ($query, $sumber_dana) {
                    return $query->where('sites.sumber_dana', $sumber_dana);
                })
                ->when($request->tahun, function ($query, $tahun) {
                    return $query->where('sites.tahun', $tahun);
                })
                ->when($request->status, function ($query, $status) {
                    return $query->where('sites.status', $status);
                })
                //berdasarkan periode tanggal monitoring
                ->when($request->tgl_monitor_start, function ($query, $tgl_monitor_start) {
                    return $query->where('monitorings.date', '>', $tgl_monitor_start);
                })
                ->when($request->tgl_monitor_end, function ($query, $tgl_monitor_end) {
                    return $query->where('monitorings.date', '<', $tgl_monitor_end);
                })
                ->groupBy('sites.id', 'kondisi', 'tgl_monitoring')
                ->get();

        return view('laporan.laporan', compact('laporan'));
        // } else {
        //     return back()->withInput();
        // }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
    public function cetak_pdf()
    {
        // $laporans = Laporan::all();
        // $pdf = PDF::loadview('laporan_pdf', ['laporans'=>$laporans]);
        // return $pdf->download('laporan-monitoring-pdf');
    }
}
