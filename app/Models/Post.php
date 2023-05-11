<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'descr',
        'user_id',
    ];

    //relationship with user
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
