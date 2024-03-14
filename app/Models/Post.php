<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'content',
    'teacher',
    'atmosphere',
    'career',
];
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->paginate($limit_count);
    }
}
