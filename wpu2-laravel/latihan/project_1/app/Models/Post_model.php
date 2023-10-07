<?php

namespace App\Models;

use App\Models\Kategori_model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post_model extends Model
{
    use HasFactory;

    protected $table = "post";

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function Kategori_model()
    {
        return $this->belongsTo(Kategori_model::class, 'kategori_id', 'id');
    }
}
