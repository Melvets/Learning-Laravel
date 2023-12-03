<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";
    protected $guarded = ['id'];

    public function Mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }
}
