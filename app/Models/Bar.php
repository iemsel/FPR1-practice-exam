<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'waldo', 'grault'];

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
}
