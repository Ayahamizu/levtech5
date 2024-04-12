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
    'faculty_id',
    'major_id'
];
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    
    public function faculty() 
    {
        return $this->belongsTo(Faculty::class);
    }
    
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->paginate($limit_count);
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function likes() {
        return $this->hasMany('App\Models\Like');
    }
}
