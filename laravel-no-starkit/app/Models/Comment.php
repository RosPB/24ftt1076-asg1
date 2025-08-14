<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
}
class Comment extends Model { protected $fillable = ['id', 'content', 'post_id', 'user_id', 'timestamps']; 
    public $timestamps = true; }