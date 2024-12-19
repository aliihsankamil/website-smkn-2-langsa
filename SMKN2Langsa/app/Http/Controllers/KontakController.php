<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\datasmk;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kontak = DB::table('datasmks')->get();
        $kontak = datasmk::all();
        return view('adminPage.kontak.index', ['kontak' => $kontak]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    private function _validation(Request $request){
        $request->validate([
            'npsn' => 'required|max:8',
            'nama' => 'required',
            'kepsek' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telpfax' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'youtube' => 'required'
        ],
        [
            'npsn.required' => 'NPSN harus diisi',
            'npsn.max' => 'Maksimal 9 digit',
            'nama.required' => 'Nama harus diisi',
            'kepsek.required' => 'Nama Kepala Sekolah harus diisi',
            'alamat.required' => 'Alamat harus diisi',
            'email.required' => 'email harus diisi',
            'email.email' => 'Harus alamat email : contoh joni@gmail.com',
            'telpfax.required' => 'telpfax harus diisi',
            'instagram.required' => 'instagram harus diisi',
            'facebook.required' => 'facebook harus diisi',
            'twitter.required' => 'twitter harus diisi',
            'youtube.required' => 'youtube harus diisi'
            // 'misi.max' => 'Maksimal 120 digit'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_kontak = DB::table('datasmks')->where('id',$id)->first();
        return view('adminPage.kontak.edit', ['data_kontak' => $data_kontak]);
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
        $this->_validation($request);

        DB::table('datasmks')->where('id',$id)->update([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama,
            'nama_kepsek' => $request->kepsek,
            'alamat' => $request->alamat,
            'telpfax' => $request->telpfax,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook
        ]);
        return redirect()->route('data_kontak')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
