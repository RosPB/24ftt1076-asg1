<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Message extends Model
{
    DB::table('messages')->insert([
        'content' => 'This is a sample message.',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
