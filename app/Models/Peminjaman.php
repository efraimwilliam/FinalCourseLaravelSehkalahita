<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    public $fillable = ['id_buku', 'id_admin', 'id_user'];

    protected $table = 'Peminjaman';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;
}
