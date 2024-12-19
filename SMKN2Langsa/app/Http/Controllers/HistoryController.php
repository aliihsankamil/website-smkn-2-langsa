<?php

namespace App\Http\Controllers;

use App\article;
use App\gallery;
use App\history;
use App\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = history::all();
        return view('adminPage.sejarah.index', compact('history'));
    }

    public function index2()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $history = history::all();
        return view('sejarah', compact('history','jurusann','gallery2','berita2','history2'));
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
            'sejarah' => 'required|max:100000'
        ],
        [
            'sejarah.required' => 'sejarah Tidak Boleh Kosong !',
            'sejarah.max' => 'Maksimal 1000 digit'
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

        history::create([
            'teks' => $request->sejarah
        ]);

        return redirect('/histories')->with('status', 'Data berhasil di tambahkan!');
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
    public function edit(history $history)
    {
        return view('adminPage.sejarah.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, history $history)
    {
        $this->_validation($request);

        history::where('id', $history->id)
        ->update([
            'teks' => $request->sejarah
        ]);
        return redirect('/histories')->with('status', 'Data berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('histories')->where('id', $id)->delete();
        return redirect('/histories')->with('status', 'Data Berhasil dihapus');
    }
}
