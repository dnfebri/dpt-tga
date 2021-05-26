<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    // Jika nama tabel keluar dari aturan default Laravel maka nama tabel harus di definisikan
    protected $table = 'desa';

    // digunakan ketika menggunakan create()
    protected $fillable = ['nama_desa', 'jml_tps'];
}
