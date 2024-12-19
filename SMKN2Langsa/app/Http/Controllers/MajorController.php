<?php

namespace App\Http\Controllers;

use App\major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = major::all();
        return view('adminPage.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.jurusan.create');
    }

    private function _validation(Request $request){
        $request->validate([
            'foto' => 'mimes:jpeg,png,jpg,svg,gif|max:2000',
            'nama' => 'required|max:255',
            'kaprodi' => 'required|max:50',
            'desc' => 'required|max:10000'
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

        $request->foto->move(public_path('image'), $imgName);

        major::create([
            'nama_jurusan' => $request->nama,
            'kaprodi' => $request->kaprodi,
            'foto' => $imgName,
            'teks' => $request->desc
        ]);
        return redirect('/jurusans')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(major $jurusan)
    {
        return view('adminPage.jurusan.show', compact('jurusan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(major $jurusan)
    {
        return view('adminPage.jurusan.edit', compact('jurusan'));
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

        $ubah = major::findorfail($id);
        if($request->foto==''){
            $data = [
                'nama_jurusan' => $request->nama,
                'kaprodi' => $request->kaprodi,
                'teks' => $request->desc
            ];
            $ubah->update($data);
            return redirect('/jurusans')->with('status', 'Data Berhasil dirubah!');
        }else{
            $awal = $ubah->foto;

            $data = [
                'nama_jurusan' => $request->nama,
                'kaprodi' => $request->kaprodi,
                'foto' => $awal,
                'teks' => $request->desc
            ];
            $request->foto->move(public_path().'/image/', $awal);
            $ubah->update($data);
            return redirect('/jurusans')->with('status', 'Data Berhasil dirubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = major::findorfail($id);

        $file = public_path('/image/').$hapus->foto;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file di folder Public/image/berita
            @unlink($file);
        }
        //hapus data di database
        $hapus->delete();
        return redirect('/jurusans')->with('status', 'Data Berhasil di hapus!');
    }
}
