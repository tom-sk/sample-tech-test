<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalPostcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'postcode',
        'parish',
        'nuts',
        'pfa',
    ];
}
