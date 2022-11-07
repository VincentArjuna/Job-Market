<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'currency',
        'value',
        'requester'
    ];

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester');
    }
}
