<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function GuzzleHttp\Promise\all;
use function GuzzleHttp\Promise\task;

class OpdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opds = Opd::all();
        return view('opd.index', compact('opds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opd.inputopd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'nama_opd' => 'required|unique:opds,nama_opd',
                'alias_opd' => 'required|unique:opds,alias_opd',
                'email' => 'required|unique:opds,email',
                'secondemail' => 'required|unique:opds,secondemail',
            ],
        );
        if ($validatedData) {
            Opd::create($request->all());
            return redirect()->route('listopd')->with('success', 'Berhasil Menambahkan Data!');
        } else {
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opds = Opd::find($id);
        return view('opd.editopd', compact('opds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $opds = Opd::find($id);
        $rule = [
            'nama_opd' => 'required|unique:opds,nama_opd',
            'alias_opd' => 'required|unique:opds,alias_opd',
            'email' => 'required|unique:opds,email',
            'secondemail' => 'required|unique:opds,secondemail',
        ];
        if($opds->nama_opd == $request->nama_opd){
            $rule['nama_opd'] = 'required';
        }
        if($opds->alias_opd == $request->alias_opd){
            $rule['alias_opd'] = 'required';
        }
        if($opds->email == $request->email){
            $rule['email'] = 'required';
        }
        if($opds->secondemail == $request->secondemail){
            $rule['secondemail'] = 'required';
        }

        $validatedData = $request->validate(
            $rule
        );
        if ($validatedData) {
            $opds->update($request->all());
            return redirect()->route('listopd')->with('success', 'Berhasil Mengubah Data!');
        } else {
            return back()->withInput();
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opd  $opd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Opd::find($id)->delete();
        return redirect()->route('listopd')->with('success', 'Berhasil Menghapus Data!');
    }

    public function getopd(Request $request)
    {
        $opds = Opd::all();
    }
}
