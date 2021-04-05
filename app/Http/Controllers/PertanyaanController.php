<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = DB::table('pertanyaan')->get();
        return view('pertanyaan', compact('pertanyaans'));
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
        DB::table('pertanyaan')->insert([
            'id_pengguna'=> $request->id,
            'judul' => $request->title,
            'vote' => 0,
            'jawaban_terbaik' => "belum ada",
            'id_jawaban' => 1,
            'isi' => $request->question,
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
        $pertanyaans = DB::table('pertanyaan')->where('id', '=', $id)->get();
        return view('pertanyaan', compact('pertanyaans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaans = DB::table('pertanyaan')->where('id', '=', $id)->get();
        return view('pertanyaanUpdate', compact('pertanyaans'));
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
        $pertanyaans = DB::table('pertanyaan')->where('id', '=', $id)->update([
                            'id_pengguna' => $request->id,
                            'judul' => $request->title,
                            'isi' => $request->question,
                            'time' => date('Y-m-d H:i:s')
                        ]);
        return view('pertanyaan', compact('pertanyaans'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pertanyaan')->where('id', '=', $id)->delete();
        return redirect(url('/pertanyaan'));
    }
}
