<?php

namespace App\Http\Controllers;

use App\article;
use App\gallery;
use App\history;
use App\major;
use Illuminate\Http\Request;

class Articleall2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $key = 'aktif';
        $jurusann = major::all();
        $prestasi = article::where("status","LIKE","%$key%")->latest()->get();
        return view('prestasi', compact('prestasi','jurusann','gallery2','berita2','history2'));
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
    public function show(article $prestasi)
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        return view('beritaall', compact('prestasi','jurusann','gallery2','berita2','history2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
