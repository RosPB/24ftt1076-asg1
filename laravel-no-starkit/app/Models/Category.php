<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
}
class Category extends Model 
{ 
    protected $fillable = ['id', 'name', 'description', 'timestamps']; 
    public $timestamps = true;
    public function post(){
        return $this->hasMany(Post::class);
    }
}