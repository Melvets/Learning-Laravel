<?php

namespace App\Models;

use App\Models\Kategori_model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Cviebrock\EloquentSluggable\Sluggable;

class Post_model extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = "post";
    protected $guarded = ['id'];
    protected $with = ['author', 'Kategori_model'];

    public function scopeFilter($query, array $filters)
    {   
        // if( isset($filters['search']) ? $filters['search'] : false ) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                  ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when( ($filters['search']) ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        } );

        $query->when( $filters['kategori'] ?? false, function($query, $kategori) {
            return $query->whereHas('Kategori_model', function($query) use ($kategori) {
                $query->where('slug', $kategori);
            });
        } );

        $query->when( $filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function Kategori_model()
    {
        return $this->belongsTo(Kategori_model::class, 'kategori_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
