<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'value',
        'source',
        'comment'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
