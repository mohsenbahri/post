<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_follow extends Model
{
    use HasFactory;
    protected $fillable=['followed_id','follower_id'];
}
