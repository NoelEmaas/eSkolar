<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'post_id'
    ];

    public function likeable(): MorphTo {
        return $this->morphTo();
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function scholarship(): BelongsTo {
        return $this->belongsTo(Scholarship::class);
    }

    public function Forum(): BelongsTo {
        return $this->belongsTo(Forum::class);
    }
}
