<?php

namespace App\Http\Controllers;

use App\article;
use App\gallery;
use App\headmastersword;
use App\history;
use App\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadmasterswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = headmastersword::all();
        return view('adminPage.sambutan.index', compact('sambutan'));
    }

    public function index2()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $sambutan = headmastersword::all();
        return view('sambutanKepsek', compact('sambutan','jurusann','gallery2','berita2','history2'));
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

    private function _validation(Request $request){
        $request->validate([
            'sambutan' => 'required|max:1000'
        ],
        [
            'sambutan.required' => 'sambutan Tidak Boleh Kosong !',
            'sambutan.max' => 'Maksimal 1000 digit'
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

        headmastersword::create([
            'teks' => $request->sambutan
        ]);

        return redirect('/headmasterswords')->with('status', 'Data berhasil di tambahkan !');
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
    public function edit(headmastersword $sambutan)
    {
        return view('adminPage.sambutan.edit', compact('sambutan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, headmastersword $sambutan)
    {
        $this->_validation($request);

        headmastersword::where('id', $sambutan->id)
        ->update([
            'teks' => $request->sambutan
        ]);
        return redirect('/headmasterswords')->with('status', 'Data berhasil di update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('headmasterswords')->where('id', $id)->delete();
        return redirect('/headmasterswords')->with('status', 'Data berhasil dihapus !');
    }
}
