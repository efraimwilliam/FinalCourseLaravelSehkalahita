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
    public function getbuku(){
        $buku = DB::table('Buku')->select('id', 'name', 'jumlah_buku')->get();
        //return [($buku)];
        return view('Buku', compact('buku'));
    }

    //create data buku
    public function createbuku(Request $request){
        $buku = Buku::create([
            'name' => $request->name,
            'jumlah_buku' => $request->jumlah_buku
        ]);
        return redirect('/admin/buku');
    }

    //create buku page
    public function createbukupage(){
        return view('CreateBuku');
    }

    //update buku
    public function updatebukupage(){
        return view('UpdateBuku');
    }

    public function updatebuku(){
        
    }
}
