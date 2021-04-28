<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = Ujian::paginate(10);

        return view('ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ujian/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUjian = new Ujian;
        $newUjian->nama_mk = $request->get("nama_mk");
        $newUjian->dosen = $request->get("dosen");
        $newUjian->jumlah_soal = $request->get("jumlah_soal");
        $newUjian->keterangan = $request->get("keterangan");

        $newUjian->save();
        return redirect()->route('ujian.index')->with('status', 'Data Ujian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ujian = Ujian::findOrFail($id);

        return view('ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ujian = Ujian::findOrFail($id);

        $ujian->nama_mk = $request->get("nama_mk");
        $ujian->dosen = $request->get("dosen");
        $ujian->jumlah_soal = $request->get("jumlah_soal");
        $ujian->keterangan = $request->get("keterangan");

        $ujian->save();
        return redirect()->route("ujian.index")->with("status", "Data Uian berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ujian = Ujian::findOrFail($id);

        $ujian->delete();
        return redirect()->route('ujian.index')->with('status', 'Data Ujian berhasil dihapus');
    }
}
