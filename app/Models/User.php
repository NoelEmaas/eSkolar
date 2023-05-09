<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scholarships(): HasMany {
        return $this->hasMany(Scholarship::class);
    }

    public function forums(): HasMany {
        return $this->hasMany(Forum::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
    
    public function likes(): HasMany {
        return $this->hasMany(Like::class);
    }

    public function getScholarshipCountAttribute() {
        return count($this->scholarships);
    }
    public function getForumCountAttribute() {
        return count($this->forums);
    }

    public function getLikeCountAttribute() {
        $like_count = 0;
        foreach ($this->scholarships as $scholarship) 
            $like_count += $scholarship->like_count;

        foreach ($this->forums as $forum) 
            $like_count += $forum->like_count;

        return $like_count;
    }
}
