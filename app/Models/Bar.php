<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bar extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'waldo', 'grault'];

    /*
     * makes derived attribute ordan
     */
    public function getOrdanAttribute()
    {
        if ($this->waldo === null) {
            return 'empty';
        }

        if ($this->grault < pi()) {
            return 'low';
        }

        return 'normal';
    }

    /*
     * belongs to users
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
