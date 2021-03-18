<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;
use App\Models\Role;
use App\Models\Peminjaman;
Use App\Models\User;

//Dashboard untuk ADMIN

class DashboardController extends Controller
{
    //Count function for dashboard
    public function getjumlahbuku(){

        $jumlah = Buku::count();
        $jumlah1 = Peminjaman::count();
        $jumlah2 = Role::count(); 
        
        return view('DashboardAdmin', compact('jumlah', 'jumlah1', 'jumlah2'));
    }
    //get all data buku
    public function getbuku(){
        $buku = DB::table('Buku')->select('id', 'name', 'jumlah_buku')->get();
       
        return view('Buku', compact('buku'));
    }

    //create buku page
    public function createbukupage(){

        return view('CreateBuku');        
    }

    //create data buku
    public function createbuku(Request $request){
        $buku = Buku::create([
            'name' => $request->name,
            'jumlah_buku' => $request->jumlah_buku
        ]);

        return redirect('/admin/buku');
    }

    //update buku page
    public function updatebukupage(){

        return view('UpdateBuku');
    }

    //update buku
    public function updatebuku(){

    }

    //get all data role
    public function getrole(){
        $role = DB::table('Role')->select('id', 'name')->get();

        return view('Role', compact('role'));
    }

    //create role page
    public function createrolepage(){

        return view('CreateRole');
    }

    //create role
    public function createrole(Request $request){
        $role = Role::create([
            'name'=>$request->name
        ]);

        return redirect('/admin/role');
    }

    //update role page
    public function updaterolepage(){

        return view('UpdateRole');
    }
    //update role
    public function updaterole(Request $request, $id){
        $roles= Role::where('id', $id)->first();

        $roles->update([
            'name' => $request->name
        ]);

        return redirect('/admin/role');
        
        //return redirect('/admin/updaterole', compact('roles')) ;
        //return view('UpdateRole', compact ('roles'));

    }

    //get all data Peminjaman
    public function getpeminjaman(){
        $peminjaman = DB::table('Peminjaman')->select('id', 'id_buku', 'id_user', 'id_admin')->get();
        
        return view('Peminjaman', compact('peminjaman'));
    }

    //create peminjaman page
    public function createpeminjamanpage(Request $request){
        
        return view('/CreatePeminjaman');
    }

    //create peminjaman
    public function createpeminjaman(Request $request){
        $peminjaman = Peminjaman::create([
            'id_buku' => $request->id_buku,
            'id_user' => $request->id_user,
            'id_admin' => $request->id_admin
        ]);

        return redirect('/admin/peminjaman');
    }


}
