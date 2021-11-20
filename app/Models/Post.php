<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $guarded = 'id_news';
    protected $primaryKey = 'id_news';
    public $timestamps = false;
}
