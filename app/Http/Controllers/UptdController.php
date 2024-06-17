<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Uptd;
use Illuminate\Http\Request;

class UptdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uptds = Uptd::all();
        return view('uptd.index', compact('uptds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opds = Opd::all();
        return view('uptd.inputuptd', compact('opds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'opd_id' => 'required',
                'nama_uptd' => 'required|unique:uptds',
                'email' => 'required|unique:uptds,email',
                'secondemail' => 'required|unique:uptds,secondemail',
            ],
            [
                'opd_id.required' => 'Harap Pilih OPD',
            ]
        );
        if ($validateData) {
            Uptd::create($request->all());
            return redirect()->route('listuptd')->with('success', 'Berhasil Menambahkan Data!');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Uptd  $uptd
     * @return \Illuminate\Http\Response
     */
    public function show(Uptd $uptd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Uptd  $uptd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uptd = Uptd::find($id);
        $opds = Opd::all();
        return view('uptd.edituptd', compact('uptd', 'opds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Uptd  $uptd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $uptds = Uptd::find($id);
        $rule = [
            'opd_id' => 'required',
            'nama_uptd' => 'required|unique:uptds,nama_uptd',
            'email' => 'required|unique:uptds,email',
            'secondemail' => 'required|unique:uptds,secondemail',
        ];
        if($uptds->opd_id == $request->opd_id){
            $rule['opd_id'] = 'required';
        }
        if($uptds->nama_uptd == $request->nama_uptd){
            $rule['nama_uptd'] = 'required';
        }
        if($uptds->email == $request->email){
            $rule['email'] = 'required';
        }
        if($uptds->secondemail == $request->secondemail){
            $rule['secondemail'] = 'required';
        }

        $validatedData = $request->validate(
            $rule
        );
        if ($validatedData) {
            $uptds->update($request->all());
            return redirect()->route('listuptd')->with('success', 'Berhasil Mengubah Data!');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Uptd  $uptd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uptds = Uptd::find($id);
        $uptds->delete();
        return redirect()->route('listuptd')->with('success', 'Berhasil Menghapus Data!');
    }

    public  function getuptd(Request $request)
    {
        $uptd = Uptd::where('opd_id', '=' ,$request->opd_id)->pluck('id', 'nama_uptd');
        return response()->json($uptd);
    }
}
