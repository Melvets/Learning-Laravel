<?php

namespace App\Models;

use App\Models\Post_model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori_model extends Model
{
    use HasFactory;

    protected $table = "kategori";

    public function Posts_model()
    {
        return $this->hasMany(Post_model::class, 'kategori_id', 'id');
    }
}
