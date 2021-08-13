<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y - G:i ');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
