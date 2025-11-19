<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Thehouseofel\Kalion\Features\Shared\Infrastructure\Models\User as KalionUser;

class User extends KalionUser
{
    use HasApiTokens;

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
