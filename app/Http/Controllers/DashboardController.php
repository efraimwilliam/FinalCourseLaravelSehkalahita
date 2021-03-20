<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Buku;
use App\Models\Role;
use App\Models\Peminjaman;
use App\Models\User;
use Auth;

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
    public function updatebukupage($id){
        $buku = Buku::find($id);

        return view('UpdateBuku', compact('buku'));
    }

    //update buku
    public function updatebuku(Request $request, $id){
        $buku= Buku::where('id', $id)->first();

        $buku->update([
            'name' => $request->name,
            'jumlah_buku' => $request->jumlah_buku
        ]);

        return redirect('/admin/buku');
    }


    //lihat buku
    public function lihatbukupage($id){
        $buku = Buku::find($id);

        //return $peminjaman;
        return view('LihatBuku', compact('buku'));
    }

    //delete buku
    public function deletebuku($id){
        $buku = Buku::where('id', $id)->first();
        $buku->delete();

        return redirect('/admin/buku');
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
    public function updaterolepage($id){
        $role = Role::find($id);

        return view('UpdateRole', compact('role'));
    }

    //update role
    public function updaterole(Request $request, $id){
        $roles= Role::where('id', $id)->first();

        $roles->update([
            'name' => $request->name
        ]);

        return redirect('/admin/role');

    }
    //delete role
    public function deleterole($id){
        $role = Role::where('id', $id)->first();
        $role->delete();

        return redirect('/admin/role');
    }

    //get all data Peminjaman
    public function getpeminjaman(){
        $peminjaman = DB::table('Peminjaman')->select('id', 'id_buku', 'id_admin', 'id_user')->get();
        
        return view('Peminjaman', compact('peminjaman'));
    }

    //create peminjaman page
    public function createpeminjamanpage($id){
        $peminjaman = Buku::get();

        return view('CreatePeminjaman', compact('peminjaman'));

    }
    //create peminjaman
    public function createpeminjaman(Request $request){
        $peminjaman = Peminjaman::create([
            'id_buku'=> $request->id_buku,
            'id_admin'=> Auth::id(),
            'id_user'=> $request->id_user
        ]);

        return redirect('/admin/peminjaman');
    }

    //update peminjaman page
    public function updatepeminjamanpage($id){
        $peminjaman = Peminjaman::find($id);
        
        
        return view('/UpdatePeminjaman', compact('peminjaman'));
    }

    //lihat peminjaman page
    public function lihatpeminjamanpage($id){
        $peminjaman = Peminjaman::find($id);

        //return $peminjaman;
        return view('LihatPeminjaman', compact('peminjaman'));
    }

    //update peminjaman
    public function updatepeminjaman(Request $request, $id){
        $peminjaman= Peminjaman::where('id', $id)->first();

        $peminjaman->update([
            'id_buku' => $request->id_buku,
            'id_admin' => $request->id_admin,
            'id_user' => $request->id_user
        ]);

        return redirect('/admin/peminjaman');

    }
    //delete peminjaman
    public function deletepeminjaman($id){
        $peminjaman = Peminjaman::where('id', $id)->first();
        $peminjaman->delete();

        return redirect('/admin/peminjaman');
    }



}
