<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes() {
        return $this->morphmany(like::class, 'likeable');
    }
}
