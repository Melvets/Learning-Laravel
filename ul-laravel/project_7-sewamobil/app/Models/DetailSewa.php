<?php

namespace App\Models;

use App\Models\Mobil;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

class DetailSewa extends Model
{
    use HasFactory;

    protected $table = "detailsewa";
    protected $guarded = ['id'];

    public function Mobil(): BelongsTo
    {
        return $this->belongsTo(Mobil::class, 'mobil_id', 'id');
    }

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
