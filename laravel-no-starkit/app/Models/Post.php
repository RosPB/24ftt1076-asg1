<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
}
class Post extends Model 
{ 
    protected $fillable = ['id', 'title', 'content', 'category_id', 'user_id', 'timestamps']; 
    public $timestamps = true;
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
