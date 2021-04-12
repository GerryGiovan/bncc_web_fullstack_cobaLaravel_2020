<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaan;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* Task 15 Laravel CRUD
        $pertanyaan = DB::table('pertanyaan')->get(); */
        $pertanyaan = Pertanyaan::all();
        return view('pertanyaan', compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pertanyaanBaru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Task 15 Laravel CRUD
        DB::table('pertanyaan')->insert([
            'id_pengguna'=> 1,
            'judul' => $request->judul,
            'vote' => 0,
            'jawaban_terbaik' => "belum ada",
            'isi' => $request->isi,
            'time' => date('Y-m-d H:i:s')
        ]); */

        Pertanyaan::create([
            'judul' => $request->judul,
            'vote' => 0,
            'jawaban_terbaik' => "belum ada",
            'isi' => $request->isi,
            'time' => date('Y-m-d H:i:s')
        ]);
        return redirect(url('/pertanyaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* Task 15 Laravel CRUD
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first(); */
        $pertanyaan = Pertanyaan::where('id', $id)->first();
        return view('/pertanyaanShow', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* Task 15 Laravel CRUD
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first(); */
        $pertanyaan = Pertanyaan::where('id', $id)->first();
        return view('pertanyaanUpdate', compact('pertanyaan'));
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
        /* Task 15 Laravel CRUD
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->update([
                            'id_pengguna' => 1,
                            'judul' => $request->judul,
                            'isi' => $request->isi,
                            'time' => date('Y-m-d H:i:s')
                        ]); */
        $pertanyaan = Pertanyaan::where('id', $id)->first();
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->save();
        return redirect('/pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::find($id)->delete();
        return redirect('/pertanyaan');
    }
}
