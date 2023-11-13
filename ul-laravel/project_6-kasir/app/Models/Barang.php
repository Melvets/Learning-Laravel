<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model  
{
    use HasFactory;

    protected $table = 'barang';

    public function Kategori(): BelongsTo {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
