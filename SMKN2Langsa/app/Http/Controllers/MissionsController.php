<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = mission::paginate(10);
        return view('adminPage.misi.index', compact('mission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPage.misi.create');
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

        mission::create([
            'teks' => $request->misi
        ]);
        return redirect('/misi')->with('status', 'Data Misi berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        return view('adminPage.misi.index', compact('mission'));
    }

    private function _validation(Request $request){
        $request->validate([
            'misi' => 'required|max:120|min:15'
        ],
        [
            'misi.required' => 'Data misi harus diisi',
            'misi.max' => 'Maksimal 120 digit'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_misi = DB::table('missions')->where('id',$id)->first();
        return view('adminPage.misi.edit', ['data_misi' => $data_misi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_validation($request);

        DB::table('missions')->where('id',$id)->update([
            'teks' => $request->misi
        ]);
        return redirect()->route('data_misi')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('missions')->where('id',$id)->delete();
        return redirect()->back()->with('status', 'Data Berhasil dihapus');
    }
}
