<?php

namespace App\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Client extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'address',
    ];

    protected static function newFactory(): ClientFactory
    {
        return new ClientFactory();
    }

    public function comments (): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
