<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $key = 'prestasi';
        $prestasi = article::where("kategori","LIKE","%$key%")->latest()->get();
        // $berita = article::all();
        return view('adminPage.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.prestasi.create');
    }

    private function _validation(Request $request){
        $request->validate([
            'foto' => 'mimes:jpeg,png,jpg,svg,gif|max:2000',
            'judul' => 'required|max:200',
            'teks' => 'required|max:10000',
            'teks_singkat' => 'required|max:65',
            'lokasi' => 'required|max:200',
            'tanggal' => 'required'
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

        $request->foto->move(public_path('image/berita'), $imgName);

        article::create([
            'foto' => $imgName,
            'judul' => $request->judul,
            'teks' => $request->teks,
            'teks_singkat' => $request->teks_singkat,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'kategori' => 'prestasi',
            'status' => 'aktif',
            'status_b' => 'aktif'
        ]);
        return redirect('/prestasi')->with('status', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(article $prestasi)
    {
        return view('adminPage.prestasi.show', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(article $prestasi)
    {
        return view('adminPage.prestasi.edit', compact('prestasi'));
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

        $ubah = article::findorfail($id);
        if($request->foto==''){
            $data = [
                'judul' => $request->judul,
                'teks' => $request->teks,
                'teks_singkat' => $request->teks_singkat,
                'tanggal' => $request->tanggal,
                'lokasi' => $request->lokasi
            ];
            $ubah->update($data);
            return redirect('/prestasi')->with('status', 'Data Berhasil dirubah!');
        }else{
            $awal = $ubah->foto;

            $data = [
                'foto' => $awal,
                'judul' => $request->judul,
                'teks' => $request->teks,
                'teks_singkat' => $request->teks_singkat,
                'tanggal' => $request->tanggal,
                'lokasi' => $request->lokasi
            ];
            $request->foto->move(public_path().'/image/berita/', $awal);
            $ubah->update($data);
            return redirect('/prestasi')->with('status', 'Data Berhasil dirubah!');
        }
    }

    public function update2(Request $request, article $prestasi)
    {
        article::where('id', $prestasi->id)
        ->update([
            'status' => $request->status
        ]);
        return redirect('/prestasi')->with('status', 'Data Berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = article::findorfail($id);

        $file = public_path('/image/berita/').$hapus->foto;
        //cek jika ada gambar
        if (file_exists($file)){
            //maka hapus file di folder Public/image/berita
            @unlink($file);
        }
        //hapus data di database
        $hapus->delete();
        return redirect('/prestasi')->with('status', 'Data Berhasil di hapus!');
    }
}
