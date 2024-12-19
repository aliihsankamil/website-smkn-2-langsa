<?php

namespace App\Http\Controllers;

use App\article;
use App\history;
use App\datasmk;
use App\gallery;
use App\major;
use App\mission;
use App\teacher;
use App\vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home() {
        $key = 'aktif';
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history = history::paginate(1);
        $prestasi = article::where("status","LIKE","%$key%")->latest()->get();
        // $berita = article::latest()->get()->random(3);
        $berita = article::where("status_b","LIKE","%$key%")->latest()->get();
        $jurusan = major::all();
        $teacher = teacher::all();
        // $datasmk = DB::table('datasmks')->get();
        $datasmk = datasmk::all();
        return view('index', compact('gallery2','berita2','berita','history','teacher', 'datasmk', 'jurusan','prestasi'));
    }

    public function visiMisi() {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $visi = vision::all();
        $misi = mission::all();
        return view('visiMisi', compact('visi', 'misi','jurusann','gallery2','berita2','history2'));
    }

    public function tenagaPendidik()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $teacher = teacher::all();
        return view('tenagaPendidik', compact('teacher','jurusann','gallery2','berita2','history2'));
    }

    public function infoSekolah()
    {
        $gallery2 = gallery::paginate(1);
        $berita2 = article::paginate(2);
        $history2 = history::paginate(1);
        $jurusann = major::all();
        $infoSekolah = datasmk::all();
        return view('infoSekolah', compact('gallery2','berita2','history2','infoSekolah','jurusann'));
    }

}
