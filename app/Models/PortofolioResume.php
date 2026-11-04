<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortofolioResume extends Model
{
    
    protected $table = 'portofolio_1106'; // Ganti xxxx sesuai kebutuhan
    protected $fillable = ['kategori', 'judul', 'tahun', 'deskripsi', 'foto', 'show_foto'];

}
