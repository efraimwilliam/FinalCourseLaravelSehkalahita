<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public $fillable = ['id_buku', 'id_user', 'id_admin'];

    protected $table = 'Peminjaman';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many inverse user
    public function useruser(){
        return $this->belongsTo(User::class, 'id_user');
    }

    //one to many inverse user
    public function useradmin(){
        return $this->belongsTo(User::class, 'id_admin');
    }
}
