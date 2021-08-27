<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
       ->diffForHumans();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function post()
    {
        return $this->belongsTo(pOST::class);
    }
}
