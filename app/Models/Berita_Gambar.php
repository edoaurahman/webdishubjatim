<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_Gambar extends Model
{
    use HasFactory;
    protected $table = 'berita_gambar';
    protected $guarded = 'id';
}
