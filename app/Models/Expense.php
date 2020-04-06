<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expense extends Model
{
    protected $fillable = [
        'value',
        'purpose',
        'comment'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
