<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'benefactor',
        'program',
        'description',
        'amount_min',
        'amount_max'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function likes() {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function getLikeCountAttribute() {
        return count($this->likes);
    }

    public function getCommentCountAttribute() {
        return count($this->comments);
    }
}
