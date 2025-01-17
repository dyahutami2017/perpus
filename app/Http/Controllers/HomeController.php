<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Anggota;
use App\Buku;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi      = Transaksi::get();
        $anggota        = Anggota::get();
        $buku           = Buku::get();
        $programKeahlian= Buku::where('kategori_id','=',4)->count();
        $fiksi          = Buku::where('kategori_id','=',3)->count();
        $nonFiksi       = Buku::where('kategori_id','=',2)->count();
        $referensi      = Buku::where('kategori_id','=',1)->count();

        if(Auth::user()->level == 'user')
        {
            $datas = Transaksi::where('status', 'pinjam')
                                ->where('anggota_id', Auth::user()->anggota->id)
                                ->get();
        } else {
            $datas = Transaksi::where('status', 'pinjam')->get();
        }


        return view('home', compact('transaksi', 'anggota', 'buku', 'datas','fiksi','nonFiksi','referensi','programKeahlian'));
    }
    public function landing()
    {
        return view('welcome');
    }
}
