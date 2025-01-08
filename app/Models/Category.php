<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    public function posts(){
        return $this->hasMany(Post::class);
        
    }
    public function scopeFilter(Builder $query){

        $query->where('title','like','%'.request('search').'%');
        
    }
}
