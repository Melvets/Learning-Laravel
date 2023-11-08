<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public static function get()
    {
        return DB::table('kelas as a')
                    ->select('a.*', 'b.jurusan')
                    ->join('jurusan as b', 'a.id_jurusan', 'b.id')
                    ->get();
    }
}
