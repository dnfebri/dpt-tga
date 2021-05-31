<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilih extends Model
{
    use HasFactory;

    // Jika nama tabel keluar dari aturan default Laravel maka nama tabel harus di definisikan
    protected $table = 'pemilih';

    // digunakan ketika menggunakan create()
    protected $fillable = ['nik', 'no_kk', 'nama', 'tmp_lahir', 'tgl_lahir', 'status_kawin', 'jenis_kelamin', 'alamat', 'kd_tps', 'kd_desa'];
}
