<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;
use App\Models\Role;
use App\Models\Peminjaman;
Use App\Models\User;

class DashboardUserController extends Controller
{
    //count function jumlah_buku
    public function getjumlahbuku(){

        $jumlah = Buku::count();
        $jumlah1 = Peminjaman::count();
        
        return view('DashboardUser', compact('jumlah', 'jumlah1'));
    }

    //get all data buku
    public function getbuku(){
        $buku = DB::table('Buku')->select('id', 'name', 'jumlah_buku')->get();
       
        return view('BukuUser', compact('buku'));
    }

    //get all data Peminjaman
    public function getpeminjaman(){
        $peminjaman = DB::table('Peminjaman')->select('id', 'id_buku', 'id_admin', 'id_user')->get();
            
        return view('PeminjamanUser', compact('peminjaman'));
        }

        //lihat buku
        public function lihatbukupage($id){
        $buku = Buku::find($id);

        //return $peminjaman;
        return view('LihatBukuUser', compact('buku'));
    }

    //lihat peminjaman page
    public function lihatpeminjamanpage($id){
        $peminjaman = Peminjaman::find($id);

        //return $peminjaman;
        return view('LihatPeminjamanUser', compact('peminjaman'));
    }
}
