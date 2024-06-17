<?php

namespace App\Http\Controllers;

use App\Models\monitoring;
use App\Models\Opd;
use App\Models\site;
use App\Models\Uptd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitorings = Monitoring::all();
        return view('monitoring.index', compact('monitorings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sites = Site::all();
        $opds = Opd::all();
        $uptds = Uptd::all();
        $monitorings = Monitoring::all();
        $kondisi = ['Normal', 'Error'];
        return view('monitoring.inputmonitoring', compact('sites', 'opds', 'uptds', 'monitorings', 'kondisi'));
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
        DB::beginTransaction();
        try
        {
            // Validate the incoming request data
            $request->validate([
                'date' => 'required|date',
                'selected_sites.*' =>'required',
                'kondisi.*' => 'required',
                'keterangan.*' => 'required',
            ]);
    
            // Save the monitoring data
            foreach ($request->selected_sites as $key => $checked) {
                Monitoring::create([
                    'site_id' => $checked,
                    'kondisi' => $request->kondisi[$key],
                    'keterangan' => $request->keterangan[$key],
                    'date' => $request->date,
                ]);
            }

            DB::commit();
    
            return redirect()->route('listmonitoring')->with('success', 'Data Monitoring Disimpan !');

        }catch (\Exception $e){ 
            DB::rollback();

            return back()->withInput()->with('error', $e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\monitoring  $monitoring
     * @return \Illuminate\Http\Response
     */
    public function show(monitoring $monitoring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\monitoring  $monitoring
     * @return \Illuminate\Http\Response
     */
    public function edit(monitoring $monitoring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\monitoring  $monitoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, monitoring $monitoring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\monitoring  $monitoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(monitoring $monitoring)
    {
        //
    }
}
