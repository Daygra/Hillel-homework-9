<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Income extends Model
{
    protected $fillable = [
        'value',
        'source',
        'comment'
    ];
   /* public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }*/
}
