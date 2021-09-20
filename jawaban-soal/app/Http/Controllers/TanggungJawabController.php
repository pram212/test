<?php

namespace App\Http\Controllers;

use App\Models\TanggungJawab;
use App\Models\User;
use Illuminate\Http\Request;

class TanggungJawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tanggungjawab = TanggungJawab::all();
        // dd($tanggungjawab->user);
        return view('tanggung-jawab.index', compact('tanggungjawab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\TanggungJawab  $tanggungJawab
     * @return \Illuminate\Http\Response
     */
    public function show(TanggungJawab $tanggungJawab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TanggungJawab  $tanggungJawab
     * @return \Illuminate\Http\Response
     */
    public function edit(TanggungJawab $tanggungJawab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TanggungJawab  $tanggungJawab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TanggungJawab $tanggungJawab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TanggungJawab  $tanggungJawab
     * @return \Illuminate\Http\Response
     */
    public function destroy(TanggungJawab $tanggungJawab)
    {   
        $user = $tanggungJawab->user();
        $user->delete();
        $tanggungJawab->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');

    }
}
