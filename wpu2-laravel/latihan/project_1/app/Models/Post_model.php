<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_model extends Model
{
    use HasFactory;

    protected $table = "post";

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
}
