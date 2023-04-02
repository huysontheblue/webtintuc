<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','slug', 'excerpt', 'body', 'user_id','category_id', 'approved'];
    
    public function author() {
        //Bộ lọc bổ sung belongsTo
        return $this->belongsTo(User::class, 'user_id');
    } 

    public function category() {
        return $this->belongsTo(Category::class);
    } 

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    
    public function comments() {
        //Bộ lọc bổ sung hasMany
        return $this->hasMany(Comment::class);
    }

    public function image() {
        return $this->morphOne(Image::class, 'imageable');
    } 

    // scope functions
    public function scopeApproved($query){
        return $query->where('approved', 1);
    }

}
