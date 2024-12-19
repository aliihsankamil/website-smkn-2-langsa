<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = teacher::paginate(20);
        return view('adminPage.guru.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.guru.create');
    }

    private function _validation(Request $request){
        $request->validate([
            'nip' => 'required|max:18',
            'nama' => 'required|max:191',
            'bidang' => 'required|max:191',
            'foto' => 'mimes:jpeg,png,jpg,svg,gif|max:3000'
        ],
        [
            'nip.required' => 'Nip Tidak Boleh Kosong !',
            'nip.max' => 'Maksimal 18 digit',
            'nama.required' => 'Nama Tidak Boleh Kosong !',
            'bidang.required' => 'Bidang Tidak Boleh Kosong !',
            'foto.max' => 'Maksimal 2MB'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);

        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('image/guru'), $imgName);

        teacher::create([
            'foto' => $imgName,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'bidang' => $request->bidang
        ]);
        
        return redirect('/teachers')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('adminPage.guru.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('adminPage.guru.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teacher $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->_validation($request);

        $ubah = teacher::findorfail($teacher->id);
        if($request->foto==''){
            Teacher::where('id', $teacher->id)
            ->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'bidang' => $request->bidang
            ]);
            return redirect('/teachers')->with('status', 'Data Guru Berhasil Diubah!');
        }else{
            $awal = $ubah->foto;

            Teacher::where('id', $teacher->id)
            ->update([
                'nip' => $request->nip,
                'nama' => $request->nama,
                'bidang' => $request->bidang,
                'foto' => $awal
            ]);
            $request->foto->move(public_path().'/image/guru/', $awal);
            return redirect('/teachers')->with('status', 'Data Guru Berhasil Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('teachers')->where('id', $id)->delete();
        // return redirect('/teachers')->with('status', 'Data Berhasil dihapus');

        $hapus = teacher::findorfail($id);

        $file = public_path('/image/guru/').$hapus->foto;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file di folder Public/image/berita
            @unlink($file);
        }
        //hapus data di database
        $hapus->delete();
        return redirect('/teachers')->with('status', 'Data Berhasil di hapus!');
    }
}
