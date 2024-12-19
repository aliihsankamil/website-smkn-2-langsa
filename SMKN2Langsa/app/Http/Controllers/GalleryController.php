<?php

namespace App\Http\Controllers;

use App\article;
use App\gallery;
use App\history;
use App\major;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::all();
        return view('adminPage.galery.index', compact('gallery'));
    }

    public function index2()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $galleries = gallery::all();
        return view('/galery', compact('gallery2','galleries','jurusann','berita2','history2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.galery.create');
    }

    private function _validation(Request $request){
        $request->validate([
            'foto' => 'mimes:jpeg,png,jpg,svg,gif|max:4000',
            'deskripsi' => 'required|max:1000'
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

        $request->foto->move(public_path('/image/galleries/'), $imgName);

        gallery::create([
            'foto' => $imgName,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/galleries')->with('status', 'Data Berhasil ditambahkan!');
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
    public function edit(gallery $gallery)
    {
        return view('adminPage.galery.edit', compact('gallery'));
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

        $ubah = gallery::findorfail($id);
        if($request->foto==''){
            $data = [
                'deskripsi' => $request->deskripsi
            ];
            $ubah->update($data);
            return redirect('/galleries')->with('status', 'Data Berhasil dirubah!');
        }else{
            $awal = $ubah->foto;

            $data = [
                'foto' => $awal,
                'deskripsi' => $request->deskripsi
            ];
            $request->foto->move(public_path().'/image/galleries/', $awal);
            $ubah->update($data);
            return redirect('/galleries')->with('status', 'Data Berhasil dirubah!');
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
        $hapus = gallery::findorfail($id);

        $file = public_path('/image/galleries/').$hapus->foto;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file di folder Public/image/berita
            @unlink($file);
        }
        //hapus data di database
        $hapus->delete();
        return redirect('/galleries')->with('status', 'Data Berhasil di hapus!');
    }
}
