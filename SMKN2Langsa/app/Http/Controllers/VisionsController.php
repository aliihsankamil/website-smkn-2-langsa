<?php

namespace App\Http\Controllers;

use App\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vision = vision::all();
        return view('adminPage.visi.index', compact('vision'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.visi.create');
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

        Vision::create([
            'teks' => $request->visi
        ]);
        return redirect('/visi')->with('status', 'Data Misi berhasil Ditambahkan!');
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
            'visi' => 'required|max:1000'
        ],
        [
            'visi.required' => 'Data Visi harus diisi!',
            'visi.max' => 'Maksimal 1000 digit'
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
        $data_visi = DB::table('visions')->where('id',$id)->first();
        return view('adminPage.visi.edit', ['data_visi' => $data_visi]);
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

        DB::table('visions')->where('id',$id)->update([
            'teks' => $request->visi
        ]);

        return redirect()->route('data_visi')->with('status','Data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('visions')->where('id', $id)->delete();
        return redirect('/visi')->with('status', 'Data Berhasil dihapus');
    }
}
