<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefecationLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'time',
        'note',
        'type',
        'color',
        'smell',
        'amount',
        'consistency',
        'blood',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
