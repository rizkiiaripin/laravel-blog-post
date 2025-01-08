<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function Laravel\Prompts\search;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $guarded = ['id','isAdmin'];
    protected $with = ['category','author'];
    // protected $table = 'laravelproject';
    public function author(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function scopeFilter(Builder $query,array $filters): void{
        
        $query->when($filters['search'] ?? false , function($query ,$search ){
            $query->where('title','like','%'.$search.'%');

        });
        $query->when($filters['category'] ?? false , function($query ,$category ){
            $query->whereHas('category',fn ($query) => $query->where('slug',$category));

        });
        $query->when($filters['author'] ?? false , function($query ,$category ){
            $query->whereHas('author',fn ($query) => $query->where('name',$category));

        });

    }

}
