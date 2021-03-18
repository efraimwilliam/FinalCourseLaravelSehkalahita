<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;


class DashboardController extends Controller
{
    //Count function
    public function getjumlahbuku(){

        $jumlah = Buku::count();
        
        //return view('Dashboard2', compact('jumlah'));

        return $jumlah;



        //$jumlahbuku = Buku::get();
        //$jumlah = DB::table('Buku')->select('id')->get();
        //$jumlah = DB::table('Buku')->get()->sum('id');
        //$jumlah = DB::table('Buku')->where('id', $id)->value('jumlah');
        //return view('Dashboard2')->with('jumlah', $jumlah);  
        //$jumlah = DB::table('Buku')->count();

        //return ([$jumlah]);
         //return view('Dashboard2', compact('jumlah'));

        //return view('Dashboard2')->with('jumlah', $jumlah);
    }
}
