<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_stocks',
        'quantity',
    ];

    public function item()
    {
        return $this->belongsTo(item::class);
    }
}
