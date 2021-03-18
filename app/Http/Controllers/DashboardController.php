<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;


class DashboardController extends Controller
{
    //Count function for dashboard
    public function getjumlahbuku(){

        $jumlah = Buku::count();
        
        return view('Dashboard2', compact('jumlah'));
    }
    //get all data buku
    /*public function getbuku(){
        $buku = Buku::get();
        return $buku;
    }*/
    public function getbuku(){
        $buku = DB::table('Buku')->select('id', 'name', 'jumlah_buku')->get();
        //return [($buku)];
        return view('Buku', compact('buku'));
        
        
    }
}
