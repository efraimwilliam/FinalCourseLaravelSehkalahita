<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $fillable = ['name', 'jumlah_buku'];

    protected $table = 'Buku';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many peminjaman
    public function peminjaman(){
        return $this->belongsToMany(Peminjaman::class, 'id_buku');
    }
}
